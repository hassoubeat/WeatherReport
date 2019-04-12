/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.hassoubeat;

import com.sun.jersey.api.client.Client;
import com.sun.jersey.api.client.ClientResponse;
import com.sun.jersey.api.client.WebResource;
import javax.ws.rs.core.MediaType;

/**
 *
 * @author hassoubeat
 */
public class RestClient {
    
    /**
     * GETリクエストを送る
     * @param url GETリクエストを送るURL
     * @param type リクエストタイプ(JSON,XMLなど)
     * @return 取得した結果を返却する
     */
    public String requestGET(String url, MediaType type) {
        Client client = new Client();
        WebResource resource = client.resource(url);
        ClientResponse response = resource.accept(type).get(ClientResponse.class);
        switch(response.getStatus()) {
            case 200:
                break;
            default:
                // TODO Exceptionを指定
        }
        return response.getEntity(String.class);
    }
}
