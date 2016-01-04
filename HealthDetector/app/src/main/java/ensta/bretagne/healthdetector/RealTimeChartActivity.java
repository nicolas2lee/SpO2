package ensta.bretagne.healthdetector;
//https://www.youtube.com/watch?v=a20EchSQgpw
import android.graphics.Color;
import android.os.Bundle;
import android.app.Activity;
import android.view.View;

import com.github.mikephil.charting.charts.LineChart;
import com.github.mikephil.charting.components.Legend;
import com.github.mikephil.charting.components.XAxis;
import com.github.mikephil.charting.components.YAxis;
import com.github.mikephil.charting.data.Entry;
import com.github.mikephil.charting.data.LineData;
import com.github.mikephil.charting.data.LineDataSet;
import com.github.mikephil.charting.utils.ColorTemplate;

public class RealTimeChartActivity extends Activity {

    private LineChart mLineChart;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_real_time_chart);
        mLineChart = (LineChart) findViewById(R.id.realtime_chart);
        mLineChart.setDescription("Real time");
        mLineChart.setNoDataTextDescription("No data at this moment");
        mLineChart.setHighlightPerDragEnabled(true);
        mLineChart.setTouchEnabled(true);
        mLineChart.setDragEnabled(true);
        mLineChart.setScaleEnabled(true);
        mLineChart.setDrawGridBackground(false);
        mLineChart.setPinchZoom(true);
        mLineChart.setBackgroundColor(Color.LTGRAY);
        //handle data
        LineData data = new LineData();
        data.setValueTextColor(Color.WHITE);
        mLineChart.setData(data);

        Legend l = mLineChart.getLegend();
        l.setForm(Legend.LegendForm.LINE);
        l.setTextColor(Color.WHITE);

        XAxis x1= mLineChart.getXAxis();
        x1.setTextColor(Color.WHITE);
        x1.setDrawGridLines(false);
        x1.setAvoidFirstLastClipping(true);

        YAxis y1 = mLineChart.getAxisLeft();
        y1.setTextColor(Color.WHITE);
        y1.setAxisMaxValue(120f);
        y1.setDrawGridLines(true);

        YAxis y12 = mLineChart.getAxisRight();
        y12.setEnabled(false);

    }

    @Override
    protected void onResume() {
        super.onResume();
        new Thread(new Runnable() {
            @Override
            public void run() {
                for (int i =0 ;i <100; i++){
                    runOnUiThread(new Runnable() {
                        @Override
                        public void run() {
                            addEntry();
                        }
                    });
                    try {
                        Thread.sleep(1000);
                    } catch (InterruptedException e) {
                        e.printStackTrace();
                    }
                }
            }
        }).start();

    }




    private void addEntry(){
        LineData data = mLineChart.getData();

        if (data != null){
            LineDataSet set = data.getDataSetByIndex(0);

            if(set == null){
                set = createSet();
                data.addDataSet(set);
            }
            data.addXValue("");
            data.addEntry(new Entry((float) (Math.random() * 120) + 5f, set.getEntryCount()), 0);
            mLineChart.notifyDataSetChanged();

            mLineChart.setVisibleXRangeMaximum(6);
            mLineChart.moveViewToX(data.getXValCount()-7);
        }
    }

    private LineDataSet createSet(){
        LineDataSet set = new LineDataSet(null, "SPL Db");
        set.setDrawCubic(true);
        set.setCubicIntensity(0.2f);
        set.setAxisDependency(YAxis.AxisDependency.LEFT);
        set.setColor(ColorTemplate.getHoloBlue());
        set.setCircleColor(ColorTemplate.getHoloBlue());
        set.setLineWidth(2f);
        set.setCircleSize(4f);
        set.setFillAlpha(65);
        set.setFillColor(ColorTemplate.getHoloBlue());
        set.setHighLightColor(Color.rgb(244, 117, 117));
        set.setValueTextColor(Color.WHITE);
        set.setValueTextSize(10f);

        return set;
    }

}
