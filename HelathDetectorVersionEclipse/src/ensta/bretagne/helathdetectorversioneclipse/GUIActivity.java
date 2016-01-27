package ensta.bretagne.helathdetectorversioneclipse;





import android.content.Intent;
import android.os.Build;
import android.os.Bundle;
import android.annotation.SuppressLint;
import android.annotation.TargetApi;
import android.app.Activity;
import android.app.FragmentManager;
import android.app.FragmentTransaction;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.RadioGroup;
import android.widget.Toast;
import android.widget.RadioGroup.OnCheckedChangeListener;

@TargetApi(Build.VERSION_CODES.HONEYCOMB) public class GUIActivity extends Activity {

	RadioGroup rg;
	int pos;
	int pos1;
	
	//Fragment Object
    private Fragment1 fg1;
    private Fragment2 fg2;
    private Fragment3 fg3;
	//MyFragment fg1,fg2,fg3;
    private FragmentManager fManager;
	
	
	@TargetApi(Build.VERSION_CODES.HONEYCOMB) @Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_gui);
		
		 fManager = getFragmentManager();

	        fg1 = new Fragment1();
	        fg2 = new Fragment2();
	        fg3 = new Fragment3();
	        
	        rg = (RadioGroup) findViewById(R.id.radioGroup1); 
	        rg.setOnCheckedChangeListener(new OnCheckedChangeListener() {
				
	        @SuppressLint("NewApi") @TargetApi(Build.VERSION_CODES.HONEYCOMB) @Override
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
	       });
	        /*
			private void hideAllFragment(FragmentTransaction fragmentTransaction){
		        if(fg1 != null)fragmentTransaction.hide(fg1);
		        if(fg2 != null)fragmentTransaction.hide(fg2);
		        if(fg3 != null)fragmentTransaction.hide(fg3);
		    }*/
		
		findViewById(R.id.show_chart_button).setOnClickListener(new View.OnClickListener() {

			@Override
			public void onClick(View view) {
				startActivity(new Intent(getBaseContext(), StaticChartsActivity.class));
			}
		});

		findViewById(R.id.realtime_chart_button).setOnClickListener(new View.OnClickListener(){

			@Override
			public void onClick(View view) {
				startActivity(new Intent(getBaseContext(), RealTimeChartActivity.class));
			}
		});
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.activity_gui, menu);
		return true;
	}

}
