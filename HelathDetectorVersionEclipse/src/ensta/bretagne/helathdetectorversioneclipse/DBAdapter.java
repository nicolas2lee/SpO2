package ensta.bretagne.helathdetectorversioneclipse;

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
	//key word for table user
    static final String KEY_USERID = "user_id";
    static final String KEY_USERNAME = "username";
    static final String KEY_PASSWORD = "password";
    static final String KEY_EMAIL = "email";
    static final String KEY_ROLE = "role";
    
    //key word for table sensor
    static final String KEY_SENSORID = "sensor_id";
    static final String KEY_SENSORNAME = "sensorname";
    static final String KEY_TYPE = "type";
    static final String KEY_UNITY = "unity";
    static final String KEY_TOKEN = "token";
    //need userid for table sensor
    
    //key word for table measurement
    static final String KEY_MEASUREMENTID = "measurement_id";
    static final String KEY_TBEGIN = "tbegin";
    static final String KEY_TEND = "tend";
    //need sensorid for table measurement
    
    //key word for table Health_data
    static final String KEY_HEALTH_DATA = "health_data_id";
    static final String KEY_DEBIT_O2 = "debit_o2";
    static final String KEY_datetime = "datetime";
    //need measurementid for table Health_data
    
    static final String TAG = "DBAdapter";

    static final String DATABASE_NAME = "MyDB";
    static final String TABLE_USER = "user";
    static final String TABLE_SENSOR = "sensor";
    static final String TABLE_MEASUREMENT = "measurement";
    static final String TABLE_HEALTH_DATA = "health_data";
    
    static final int DATABASE_VERSION = 1;

    static final String CREATE_TABLE_USER = "CREATE TABLE "+TABLE_USER+
    		" ("+KEY_USERID +" integer primary key autoincrement, "+
    		KEY_USERNAME +" text not null, " 
    		+ KEY_PASSWORD +" text not null, " 
    		+ KEY_TYPE+" text not null, "
    		+ KEY_UNITY+" text not null, "
    		+ KEY_TOKEN+ " text not null"
    		+ ")";
    
    static final String CREATE_TABLE_SENSOR = "CREATE TABLE "+TABLE_SENSOR+
    		" ("+KEY_SENSORID +" integer primary key autoincrement, "+
    		KEY_SENSORNAME +" text not null, " 
    		+ KEY_PASSWORD +" text not null, " 
    		+ KEY_EMAIL+" text not null, "
    		+ KEY_ROLE+" text not null "
    		+ ")";
    
    static final String DATABASE_CREATE = "Create table user (user_id integer primary key autoincrement, "+
            "username text not null, email text not null, password text not null, " +
            "role text not null )";
   // static final String DATABASE_CREATE = "Create table contacts (_id integer primary key autoincrement, "+
   //         "username text not null, password text not null, email text not null)";
    
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
            	Log.i("create Database","created");
                db.execSQL(CREATE_TABLE_USER);
                db.execSQL(CREATE_TABLE_SENSOR);
            }catch(SQLException e){
                e.printStackTrace();
            }
        }

        @Override
        public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
            Log.w(TAG, "Upgrading database from version " + oldVersion + " to " + newVersion + ", which will destroy all old data");
            db.execSQL("DROP TABLE IF EXISTS user");
            onCreate(db);
        }
        
    }

    public DBAdapter open() throws SQLException{
        db = DBHelper.getWritableDatabase();
        return this;
    }
    
    public void close(){
        DBHelper.close();
    }

    public long insertUser(String username, String email, String password, String role){
        ContentValues initialValues = new ContentValues();
        initialValues.put(KEY_USERNAME, username);
        initialValues.put(KEY_PASSWORD, password);
        initialValues.put(KEY_EMAIL, email);
        initialValues.put(KEY_ROLE, role);
        
        long id = db.insert(TABLE_USER, null, initialValues);
        Log.i("inser database",id+"");
        return id ;
    }

    public boolean deleteUser(long rowId){
        return db.delete(TABLE_USER, KEY_USERID+"="+rowId,null) > 0;
    }

    public Cursor getAllUsers(){
        return db.query(TABLE_USER, new String[] {KEY_USERID, KEY_USERNAME, KEY_EMAIL},null,null,null,null,null);
    }

    public Cursor getUser(long rowId) throws SQLException{
        Cursor mCursor = db.query(true, TABLE_USER, new String[] {KEY_USERID, KEY_USERNAME,KEY_EMAIL},KEY_USERID+"="+rowId,null,null,null,null,null);
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
        return db.update(TABLE_USER,args,KEY_USERID+"="+rowId,null) > 0;
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