package com.hassoubeat;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import com.hassoubeat.child.Description;
import com.hassoubeat.child.Forecasts;
import com.hassoubeat.child.Location;
import com.hassoubeat.child.PinpointLocations;
import com.hassoubeat.child.child.Copyright;

/**
 * WeatherHacksから取得したJSONデータを格納するオブジェクト
 * @author hassoubeat
 */
public class WeatherObject {

    public String publicTime;
    public String title;
    public Description description;
    public String link;
    public Forecasts[] forecasts;
    public Location location;
    public PinpointLocations[] pinpointLocations;
    public Copyright copyright;

}
