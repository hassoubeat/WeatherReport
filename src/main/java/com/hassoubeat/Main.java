/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.hassoubeat;


/**
 *
 * @author hassoubeat
 */
public class Main {
    public static void main(String args[]) {
        WeatherReport weatherReport = new WeatherReport();
        try {
            weatherReport.execute();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }
}
