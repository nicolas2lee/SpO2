package ensta.bretagne.healthdetector;

import java.util.ArrayList;

import android.app.Activity;
import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.MatrixCursor;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

public class DBAdapter extends Activity {
	
    static final String KEY_ROWID = "_id";
    static final String KEY_USERNAME = "username";
    static final String KEY_PASSWORD = "password";
    static final String KEY_EMAIL = "email";
    static final String TAG = "DBAdapter";

    static final String DATABASE_NAME = "MyDB";
    static final String DATABASE_TABLE = "user";
    static final int DATABASE_VERSION = 1;

    static final String DATABASE_CREATE = "Create table contacts (_id integer primary key autoincrement, "+
            "username text not null, password text not null, email text not null)";
    final Context context;
    DatabaseHelper DBHelper;
    SQLiteDatabase db;

    public DBAdapter(Context ctx){
        this.context=ctx;
        DBHelper = new DatabaseHelper(context);
    }

    private static class DatabaseHelper extends SQLiteOpenHelper{

        DatabaseHelper (Context context){
            super(context, DATABASE_NAME, null, DATABASE_VERSION);
        }
        @Override
        public void onCreate(SQLiteDatabase db) {
            try{
                db.execSQL(DATABASE_CREATE);
            }catch(SQLException e){
                e.printStackTrace();
            }
        }

        @Override
        public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
            Log.w(TAG, "Upgrading database from version " + oldVersion + " to " + newVersion + ", which will destroy all old data");
            db.execSQL("DROP TABLEＩＦEXISTS contacts");
            onCreate(db);
        }
        
    }

    public DBAdapter open() throws SQLException{
        db =DBHelper.getWritableDatabase();
        return this;
    }
    public void close(){
        DBHelper.close();
    }

    public long insertUser(String username, String email, String password){
        ContentValues initialValues = new ContentValues();
        initialValues.put(KEY_USERNAME, username);
        initialValues.put(KEY_PASSWORD, password);
        initialValues.put(KEY_EMAIL, email);
        return db.insert(DATABASE_TABLE, null, initialValues);
    }

    public boolean deleteUser(long rowId){
        return db.delete(DATABASE_TABLE, KEY_ROWID+"="+rowId,null) > 0;
    }

    public Cursor getAllUsers(){
        return db.query(DATABASE_TABLE, new String[] {KEY_ROWID, KEY_USERNAME, KEY_EMAIL},null,null,null,null,null);
    }

    public Cursor getUser(long rowId) throws SQLException{
        Cursor mCursor = db.query(true, DATABASE_TABLE, new String[] {KEY_ROWID, KEY_USERNAME,KEY_EMAIL},KEY_ROWID+"="+rowId,null,null,null,null,null);
        if (mCursor != null){
            mCursor.moveToFirst();
        }
        return mCursor;
    }

    public boolean updateUser(long rowId, String username,String email, String password){
        ContentValues args = new ContentValues();
        args.put(KEY_USERNAME, username);
        args.put(KEY_EMAIL,email);
        args.put(KEY_PASSWORD,password);
        return db.update(DATABASE_TABLE,args,KEY_ROWID+"="+rowId,null) > 0;
    }
    
    public ArrayList<Cursor> getData(String Query){
    	//get writable database
    	SQLiteDatabase sqlDB = DBHelper.getWritableDatabase();
    	String[] columns = new String[] { "mesage" };
    	//an array list of cursor to save two cursors one has results from the query 
    	//other cursor stores error message if any errors are triggered
    	ArrayList<Cursor> alc = new ArrayList<Cursor>(2);
    	MatrixCursor Cursor2= new MatrixCursor(columns);
    	alc.add(null);
    	alc.add(null);
    	
    	
    	try{
    		String maxQuery = Query ;
    		//execute the query results will be save in Cursor c
    		Cursor c = sqlDB.rawQuery(maxQuery, null);
    		

    		//add value to cursor2
    		Cursor2.addRow(new Object[] { "Success" });
    		
    		alc.set(1,Cursor2);
    		if (null != c && c.getCount() > 0) {

    			
    			alc.set(0,c);
    			c.moveToFirst();
    			
    			return alc ;
    		}
    		return alc;
    	} catch(SQLException sqlEx){
    		Log.d("printing exception", sqlEx.getMessage());
    		//if any exceptions are triggered save the error message to cursor an return the arraylist
    		Cursor2.addRow(new Object[] { ""+sqlEx.getMessage() });
    		alc.set(1,Cursor2);
    		return alc;
    	} catch(Exception ex){

    		Log.d("printing exception", ex.getMessage());

    		//if any exceptions are triggered save the error message to cursor an return the arraylist
    		Cursor2.addRow(new Object[] { ""+ex.getMessage() });
    		alc.set(1,Cursor2);
    		return alc;
    	}

    	
    }


}