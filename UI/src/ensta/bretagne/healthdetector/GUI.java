package ensta.bretagne.healthdetector;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentTransaction;
import android.view.Menu;
import android.view.View;
import android.widget.AdapterView;
import android.widget.GridView;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.TextView;
import android.widget.Toast;

public class GUI extends Activity implements RadioGroup.OnCheckedChangeListener{

    private RadioGroup rg_tab_bar;
    private RadioButton rb_user;

    //Fragment Object
    private MyFragment fg1,fg2,fg3;
    private FragmentManager fManager;
    
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_gui);
       /*
        rg_tab_bar = (RadioGroup) findViewById(R.id.rg_tab_bar);
        rg_tab_bar.setOnCheckedChangeListener(this);

        rb_user = (RadioButton) findViewById(R.id.man);
        rb_user.setChecked(true);*/
    }

	@Override
	public void onCheckedChanged(RadioGroup group, int checkedId) {
		/*
		// TODO Auto-generated method stub
		 FragmentTransaction fTransaction = fManager.beginTransaction();
	        hideAllFragment(fTransaction);
	        switch (checkedId){
	            case R.id.man:
	                if(fg1 == null){
	                    fg1 = new MyFragment("Fragment1");
	                    fTransaction.add(R.id.ly_content,fg1);
	                }else{
	                    fTransaction.show(fg1);
	                }
	                break;
	            case R.id.doctor:
	                if(fg2 == null){
	                    fg2 = new MyFragment("Fragment2");
	                    fTransaction.add(R.id.ly_content,fg2);
	                }else{
	                    fTransaction.show(fg2);
	                }
	                break;
	            case R.id.setting:
	                if(fg3== null){
	                    fg3 = new MyFragment("Fragment3");
	                    fTransaction.add(R.id.ly_content,fg3);
	                }else{
	                    fTransaction.show(fg3);
	                }
	                break;
	        }
	        fTransaction.commit();
	    }
		private void hideAllFragment(FragmentTransaction fragmentTransaction){
	        if(fg1 != null)fragmentTransaction.hide(fg1);
	        if(fg2 != null)fragmentTransaction.hide(fg2);
	        if(fg3 != null)fragmentTransaction.hide(fg3);*/
	    }

	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.activity_gui, menu);
		return true;
	}


}
