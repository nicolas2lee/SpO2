package com.example.testradiogroup;

import android.annotation.SuppressLint;
import android.app.Fragment;
import android.os.Bundle;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

 
    @SuppressLint("NewApi") public class Fragment2 extends Fragment {
    	
    	@Override
    	public View onCreateView(LayoutInflater inflater,
    			ViewGroup container, Bundle savedInstanceState) {
    		
    		// Inflate the layout for this fragment
    		return inflater.inflate(R.layout.fragment2, container, false);
    	}
    }
