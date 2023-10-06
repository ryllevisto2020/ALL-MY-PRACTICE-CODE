/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package javaapplication2;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

/**
 *
 * @author rylle
 */
public class JSON {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws JSONException {
        // TODO code application logic here
        JSONObject details = new JSONObject();
        details.put("Name", "Visto");
        details.put("Age", 1);
        
        JSONObject obj = new JSONObject();
        obj.put("Details", details);
        
        JSONObject details1 = new JSONObject();
        details1.put("Name", "Claire");
        details1.put("Age", 2);
        
        JSONObject obj1 = new JSONObject();
        obj1.put("Details", details1);
        
        JSONArray arr = new JSONArray();
        arr.put(obj);
        arr.put(obj1);
        System.out.println(arr);
        
        JSONArray get = new JSONArray(arr.toString());
        System.out.println(get.get(0));
        
        JSONObject getObj = new JSONObject(get.get(1).toString());
        JSONObject getde = new JSONObject(getObj.get("Details").toString());
        System.err.println(getde.getInt("Age"));
    }
    
}
