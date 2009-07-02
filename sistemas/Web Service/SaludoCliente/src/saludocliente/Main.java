/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package saludocliente;
import java.util.*;

/**
 *
 * @author Alejandro
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {

        try
        { // Call Web Service Operation
            localhost.Service1 service = new localhost.Service1();
            localhost.Service1Soap port = service.getService1Soap12();
            java.lang.String hola = "pato";
            localhost.ArrayOfAnyType result = port.hola(hola);
            List prueba = result.getAnyType();
            for (int i = 0;i < prueba.size(); i++)
            {
                 System.out.println(prueba.get(i));
            }
        } 
        catch (Exception ex)
        {
            ex.getStackTrace();
        }

    }

}
