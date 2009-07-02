/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package saludocliente;

/**
 *
 * @author Alejandro
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {

        try { // Call Web Service Operation
            localhost.Service1 service = new localhost.Service1();
            localhost.Service1Soap port = service.getService1Soap12();
            // TODO initialize WS operation arguments here
            java.lang.String nombre = "gaby";

            java.lang.String result = port.hola(nombre);
            System.out.println("Result = "+result);
        } catch (Exception ex) {
            ex.getStackTrace();
        }
    }

}
