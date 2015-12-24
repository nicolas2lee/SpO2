package ensta.bretagne.healthdetector;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.widget.AdapterView;
import android.widget.GridView;
import android.widget.TextView;
import android.widget.Toast;

public class GUI extends Activity {

	@Override
	public void onCreate(Bundle savedInstanceState) {
	    super.onCreate(savedInstanceState);
	    setContentView(R.layout.activity_gui);
	    findViewById(R.id.imgV1).setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view) {
            	startActivity(new Intent(getBaseContext(), detector.class));
            
            }
        });
	      
	    findViewById(R.id.imgV2).setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view) {
            	startActivity(new Intent(getBaseContext(), history.class));
            
            }
        });	   
	    
	    findViewById(R.id.imgV3).setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view) {
            	startActivity(new Intent(getBaseContext(), detector.class));
            
            }
        });	
	    
	    findViewById(R.id.imgV4).setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view) {
            	startActivity(new Intent(getBaseContext(), telephone.class));
            
            }
        });	
	    //GridView gridview = (GridView) findViewById(R.id.gridview);
	    //gridview.setAdapter(new ImageAdapter(this));
	  

	}
	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.activity_gui, menu);
		return true;
	}

}
