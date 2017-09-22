package com.sav.lba.locationbasedadvertising.util;

import android.util.Log;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.util.EntityUtils;
import org.json.JSONArray;
import org.json.JSONException;

import java.io.IOException;

/**
 * Created by Varad on 25-01-2015.
 */
public class ApiConnector {
    public JSONArray OffersDisplay(){
        String url = "http://savlbaservice.host22.com/jsonoffers.php";

        HttpEntity httpEntity = null;
        try
        {
            DefaultHttpClient httpClient = new DefaultHttpClient();
            HttpPost httpPost = new HttpPost(url);

            HttpResponse httpResponse = httpClient.execute(httpPost);

            httpEntity = httpResponse.getEntity();

        } catch (ClientProtocolException e){
            e.printStackTrace();

        }catch (IOException e){
            e.printStackTrace();
        }

        JSONArray jsonArray = null;

        if(httpEntity != null)
        {
            try{
                String entityResponse = EntityUtils.toString(httpEntity);

                Log.e("Entity Response:", entityResponse);

                jsonArray = new JSONArray(entityResponse);

            }catch (JSONException e){
                e.printStackTrace();
            }catch (IOException e){
                e.printStackTrace();
            }
        }
        return jsonArray;
    }
}
