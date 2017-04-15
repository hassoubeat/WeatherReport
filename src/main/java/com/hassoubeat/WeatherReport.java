/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.hassoubeat;

import com.fasterxml.jackson.databind.ObjectMapper;
import javax.ws.rs.core.MediaType;


/**
 * REST_APIで取得した天気予報を喋るファセットプログラム
 * ※ 商用利用が認められていないWeatherHacksのREST_APIを利用しているため、商用利用は不可
 * @author hassoubeat
 */
public class WeatherReport implements FacetInterface{
    
    private String weather_hacks_url = "http://weather.livedoor.com/forecast/webservice/json/v1?city=";
    
    @Override
    public Result execute() throws Exception {
        RestClient restClient = new RestClient();
        String resultStr = restClient.requestGET(weather_hacks_url + "016010", MediaType.APPLICATION_JSON_TYPE);
        ObjectMapper mapper = new ObjectMapper();
        WeatherObject jsonObject = mapper.readValue(resultStr, WeatherObject.class);
        String reportTitle = jsonObject.title;
//        String detailToDayReport = jsonObject.description.text;
        String toDayAboutReport = jsonObject.forecasts[0].telop;
        String toDayMaxCelsius = jsonObject.forecasts[0].temperature.max.celsius;
        String toDayMinCelsius = jsonObject.forecasts[0].temperature.min.celsius;
        String tomorrowAboutReport = jsonObject.forecasts[1].telop;
        String tomorrowMaxCelsius = jsonObject.forecasts[1].temperature.max.celsius;
        String tomorrowMinCelsius = jsonObject.forecasts[1].temperature.min.celsius;
        String talking = reportTitle + "です。" + "今日の天気と気温です。" + toDayAboutReport + "。最高温度" + toDayMaxCelsius + "度。最低温度" + toDayMinCelsius + "度です。" + "明日の天気と気温です。" + tomorrowAboutReport + "。最高温度" + tomorrowMaxCelsius + "度。" + "最低温度" + tomorrowMinCelsius + "度です。";
        // 半角スペースと改行の削除
        talking = talking.replace("\n", "");
        talking = talking.replace("\u0020", "");
        System.out.println(talking);
        
        ToyTalk.talking(talking, true);
        
        Result result = new Result();
        return result;
    }
}
