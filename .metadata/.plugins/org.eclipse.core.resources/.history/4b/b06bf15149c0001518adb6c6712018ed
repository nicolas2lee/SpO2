package ensta.bretagne.helathdetectorversioneclipse;

import android.content.Intent;
import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.view.View;
import android.widget.Button;

public class GUIActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_gui);
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
