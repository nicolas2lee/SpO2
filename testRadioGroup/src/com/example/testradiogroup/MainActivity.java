package com.example.testradiogroup;



import android.os.Bundle;
import android.annotation.SuppressLint;
import android.app.Activity;

import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentTransaction;
import android.view.Menu;
import android.widget.RadioGroup;
import android.widget.RadioGroup.OnCheckedChangeListener;
import android.widget.Toast;
 
public class MainActivity extends Activity {
 
	RadioGroup rg;
	int pos;
	int pos1;
	
	//Fragment Object
    private Fragment1 f1;
    private Fragment2 f2;
    private Fragment3 f3;
    private FragmentManager fManager;
    
    @SuppressWarnings("deprecation")
    @SuppressLint({ "NewApi", "NewApi", "NewApi", "NewApi", "NewApi", "NewApi", "NewApi" })
	@Override
	public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        fManager = getFragmentManager();
        rg = (RadioGroup) findViewById(R.id.radioGroup1);
        
        rg.setOnCheckedChangeListener(new OnCheckedChangeListener() {
			
		@SuppressLint("NewApi") @Override
		public void onCheckedChanged(RadioGroup group, int checkedId) {
			pos=rg.indexOfChild(findViewById(checkedId));

	    	FragmentTransaction fTransaction = fManager.beginTransaction();
	       // hideAllFragment(fTransaction);
	        switch (pos){
	            case 0:
	               
	            	fTransaction.replace(android.R.id.content, f1);
	                break;
	            case 1:
	            	fTransaction.replace(android.R.id.content, f2);
	                break;
	            case 2:
	            	fTransaction.replace(android.R.id.content, f3);
	                break;
	        }
	        fTransaction.commit();
	    }
		/*private void hideAllFragment(FragmentTransaction fragmentTransaction){
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
