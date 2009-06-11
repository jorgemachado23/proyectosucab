/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package seguridad;

import java.rmi.*;
import java.rmi.registry.*;

//import crysec.*;
//import crysec.SSL.*
/**
 *
 * @author alejandroblanco-uribe
 */
public class Cliente {

    public static Cliente control;
    public static InterfaceRMI rmiServidor;
    private static Registry registro;

    public Cliente()
    {
        try
        {
           System.out.println("2 + 3 = "+rmiServidor.Comprar(2, 3));
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }

    }

    /*private static void ConectarServidor(){
     
        if (System.getSecurityManager() == null)
        {
            System.setSecurityManager   (new RMISecurityManager());
        }
        try
        {
            //registro = LocateRegistry.getRegistry(1099);
            RMIServidor = (InterfaceRMI)Naming.lookup("rmi://192.168.56.101:1099/Servidor");

        }
        catch(Exception e)
        {
            e.printStackTrace();
        }

    }*/
    public static void main(String[] args)
    {
        //ConectarServidor();
        /*System.setProperty ("java.security.policy", "/Users/alejandroblanco-uribe/NetBeansProjects/Seguridad/java.policy");
        if (System.getSecurityManager() == null)
        {
            System.setSecurityManager(new SecurityManager());
        }*/
        try
        {
            registro = LocateRegistry.getRegistry(1099);
            rmiServidor = (InterfaceRMI)Naming.lookup("rmi://192.168.56.101:1099/Servidor");
            control = new Cliente();

        }
        catch (Exception e)
        {
            System.err.println("exception:");
            e.printStackTrace();
        }

    }

}

