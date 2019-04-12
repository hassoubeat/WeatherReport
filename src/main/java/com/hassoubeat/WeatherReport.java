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
    
    private final String PROPERTIES_FILE_PATH = "WeatherReport.properties"; 
    private String weather_hacks_url = "http://weather.livedoor.com/forecast/webservice/json/v1?city=";
    
    @Override
    public Result execute() throws Exception {
        // デフォルトは東京のID
        String cityId = "130010";
        cityId = PropertyUtil.getInstace().load(PROPERTIES_FILE_PATH, "city.id");
        RestClient restClient = new RestClient();
        String resultStr = restClient.requestGET(weather_hacks_url + cityId, MediaType.APPLICATION_JSON_TYPE);
        ObjectMapper mapper = new ObjectMapper();
        WeatherObject jsonObject = mapper.readValue(resultStr, WeatherObject.class);
        String reportTitle = jsonObject.title;
        String toDayAboutReport = jsonObject.forecasts[0].telop;
        String toDayCelsius;
        try {
            toDayCelsius = jsonObject.forecasts[0].temperature.max.celsius;
        } catch (NullPointerException ex) {
            toDayCelsius = null;
        }
        String tomorrowAboutReport = jsonObject.forecasts[1].telop;
        String tomorrowMaxCelsius = jsonObject.forecasts[1].temperature.max.celsius;
        String tomorrowMinCelsius = jsonObject.forecasts[1].temperature.min.celsius;
        String talking = reportTitle + "です。今日の天気";
        if (toDayCelsius != null) {
            // 今日の気温が取得できている場合
            talking += "と気温です。" + toDayAboutReport + "。現在気温" + toDayCelsius + "度。";
        } else {
            // 今日の気温が取得できていない場合
            talking += "です。" + toDayAboutReport + "。";
        }
        talking += "明日の天気と気温です。" + tomorrowAboutReport + "。最高気温" + tomorrowMaxCelsius + "度。" + "最低気温" + tomorrowMinCelsius + "度です。";
        // 半角スペースと改行の削除
        talking = talking.replace("\n", "");
        talking = talking.replace("\u0020", "");
        System.out.println(talking);
        
        ToyTalk.talking(talking, true);
        
        Result result = new Result();
        return result;
    }
}
