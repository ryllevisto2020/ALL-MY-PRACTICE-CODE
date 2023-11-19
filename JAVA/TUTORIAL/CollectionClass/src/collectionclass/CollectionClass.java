/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package collectionclass;
import java.util.*;
import java.net.HttpCookie;
/**
 *
 * @author rylle
 */
public class CollectionClass {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Dictionary<String,String> dict;
        dict = new Hashtable<>();
        dict.put("Name", "visto");
        System.err.println(dict);
        
        List<String> list = new ArrayList<>();
        list.add("visto");
        System.err.println(list);
        
        System.err.println();
        
    }
}
