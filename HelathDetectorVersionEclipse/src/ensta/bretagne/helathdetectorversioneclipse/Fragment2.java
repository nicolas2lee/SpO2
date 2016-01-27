package ensta.bretagne.helathdetectorversioneclipse;

import android.annotation.SuppressLint;
import android.app.Fragment;
import android.content.Intent;
import android.os.Bundle;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

 
    @SuppressLint("NewApi") public class Fragment2 extends Fragment {
    	
    	@Override
    	public View onCreateView(LayoutInflater inflater,
    			ViewGroup container, Bundle savedInstanceState) {

    		View v = inflater.inflate(R.layout.fragment2, container, false);
    		
    		
    		v.findViewById(R.id.show_chart_button).setOnClickListener(new View.OnClickListener() {

    			@Override
    			public void onClick(View view) {
    				startActivity(new Intent(getActivity().getBaseContext(), StaticChartsActivity.class));
    			}
    		});

    		v.findViewById(R.id.realtime_chart_button).setOnClickListener(new View.OnClickListener(){

    			@Override
    			public void onClick(View view) {
    				startActivity(new Intent(getActivity().getBaseContext(), RealTimeChartActivity.class));
    			}
    		});
    		
    		// Inflate the layout for this fragment
    		return v;
    	}
    }
