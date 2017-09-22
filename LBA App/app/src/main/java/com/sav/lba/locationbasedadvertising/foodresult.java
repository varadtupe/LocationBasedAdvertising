package com.sav.lba.locationbasedadvertising;

import android.os.AsyncTask;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.TextView;

import com.sav.lba.locationbasedadvertising.util.ApiConnector;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;


public class foodresult extends ActionBarActivity {

    ArrayList<Offers> arrayOfWebData = new ArrayList<Offers>();

    public class Offers{
        public String otitle;
        public String ocity;
        public String oarea;
    }
    //private TextView responseTextView;

    FancyAdapter fa= null;


    static ArrayList<String> resultRow;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_foodresult);
        //this.responseTextView = (TextView) this.findViewById(R.id.responseTextView);

        new GetAllOffersTask().execute(new ApiConnector());
    }
    public void setTextToTextView(JSONArray jsonArray){
        String s ="";
        for(int i=0;i<jsonArray.length();i++)
        {
            JSONObject json = null;
            try
            {
                json = jsonArray.getJSONObject(i);
                Offers resultRow = new Offers();

                resultRow.otitle=json.getString("o_title");
                resultRow.ocity=json.getString("o_city");
                resultRow.oarea=json.getString("o_area");
                arrayOfWebData.add(resultRow);
                /*s= s +
                        "Title :" + json.getString("o_title")+ "\n" +
                        "City :" + json.getString("o_city")+ "\n" +
                        "Area :" + json.getString("o_area")+ "\n";*/

            }catch (JSONException e)
            {
                e.printStackTrace();
            }
            ListView myListView = (ListView) findViewById(R.id.foodlist);

            fa= new FancyAdapter();

            myListView.setAdapter(fa);
        }
        //this.responseTextView.setText(s);
    }
    class FancyAdapter extends ArrayAdapter<Offers>
    {
        FancyAdapter()
        {
            super(foodresult.this, android.R.layout.simple_expandable_list_item_1, arrayOfWebData);
        }
        public View getView(int position, View convertView, ViewGroup parent)
        {
            ViewHolder holder;

            if(convertView==null)
            {
                LayoutInflater inflater= getLayoutInflater();
                convertView= inflater.inflate(R.layout.row,null);

                holder = new ViewHolder(convertView);
                convertView.setTag(holder);
            }
            else
            {
                holder=(ViewHolder)convertView.getTag();
            }
            holder.populateFrom(arrayOfWebData.get(position));
            return(convertView);

        }
    }
    class ViewHolder
    {
        public TextView offcity= null;
        public TextView offtitle= null;
        public TextView offarea= null;

        ViewHolder(View row)
        {
            offtitle = (TextView)row.findViewById(R.id.offertitle);
            offcity = (TextView)row.findViewById(R.id.offercity);
            offarea = (TextView)row.findViewById(R.id.offerarea);

        }

        void populateFrom(Offers off)
        {
            offtitle.setText(off.otitle);
            offcity.setText(off.ocity);
            offarea.setText(off.oarea);
        }
    }

    private class GetAllOffersTask extends AsyncTask<ApiConnector,Long,JSONArray>
    {
        @Override
        protected JSONArray doInBackground(ApiConnector... params) {
            return params[0].OffersDisplay();
        }

        @Override
        protected void onPostExecute(JSONArray jsonArray) {
            super.onPostExecute(jsonArray);
            setTextToTextView(jsonArray);
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_foodresult, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
