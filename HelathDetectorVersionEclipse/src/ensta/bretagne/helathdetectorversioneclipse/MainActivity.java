package ensta.bretagne.helathdetectorversioneclipse;



import android.os.Bundle;
import android.annotation.SuppressLint;
import android.app.Activity;
import android.app.FragmentManager;
import android.app.FragmentTransaction;


import android.view.Menu;
import android.widget.RadioGroup;
import android.widget.RadioGroup.OnCheckedChangeListener;
import android.widget.Toast;
 
public class MainActivity extends Activity {
 
	RadioGroup rg;
	int pos;
	int pos1;
	
	//Fragment Object
    private Fragment1 fg1;
    private Fragment2 fg2;
    private Fragment3 fg3;
	//MyFragment fg1,fg2,fg3;
    private FragmentManager fManager;
    

	@Override
	public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        fManager = getFragmentManager();

        fg1 = new Fragment1();
        fg2 = new Fragment2();
        fg3 = new Fragment3();
        
        rg = (RadioGroup) findViewById(R.id.radioGroup1); 
        rg.setOnCheckedChangeListener(new OnCheckedChangeListener() {
			
        @Override
		public void onCheckedChanged(RadioGroup group, int checkedId) {
			//pos=rg.indexOfChild(findViewById(checkedId));

	    	FragmentTransaction fTransaction = fManager.beginTransaction();
	      //  hideAllFragment(fTransaction);
	        switch (checkedId){
	            case R.id.me:
	            	Toast.makeText(getBaseContext(), "You have Clicked RadioButton 1",
	    					Toast.LENGTH_SHORT).show();
	                fTransaction.replace(R.id.ly_content,fg1);	
	                break;
	            case R.id.medecin:
	            	Toast.makeText(getBaseContext(), "You have Clicked RadioButton 2",
	    					Toast.LENGTH_SHORT).show();
	            	fTransaction.replace(R.id.ly_content, fg2);
	                break;
	            case R.id.setting:
	            	Toast.makeText(getBaseContext(), "You have Clicked RadioButton 3",
	    					Toast.LENGTH_SHORT).show();
	            	fTransaction.replace(R.id.ly_content, fg3);
	                break;
	            default :
	            	Toast.makeText(getBaseContext(),"You have Clicked RadioButton 1" ,
	            			Toast.LENGTH_SHORT).show();
	            	break;
	        }
	        fTransaction.commit();
	    }
        /*
		private void hideAllFragment(FragmentTransaction fragmentTransaction){
	        if(fg1 != null)fragmentTransaction.hide(fg1);
	        if(fg2 != null)fragmentTransaction.hide(fg2);
	        if(fg3 != null)fragmentTransaction.hide(fg3);
	    }*/
	});
    }
 
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_main, menu);
        return true;
    }
}
