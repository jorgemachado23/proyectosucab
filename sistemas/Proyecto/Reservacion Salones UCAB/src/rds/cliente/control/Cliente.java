/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package rds.cliente.control;
import java.rmi.*;
//import java.rmi.registry.*;
import rds.servidor.conexion.jrmi.InterfaceRMI;
/**
 *
 * @author Alejandro
 */
public class Cliente 
{
    private static InterfaceRMI rmiServidor;
    //private static Registry registro;
    private static String direccionServidor = "127.0.0.1";
    private static String puertoServidor = "3232";

    public Cliente()
    {
        
    }

    private static void conectarAlServidor()
    {
        try
        {
            rmiServidor = (InterfaceRMI)Naming.lookup("rmi://localhost:3232/Servidor");
        }
        catch(RemoteException e)
        {
            e.printStackTrace();
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
    }


    /*private void enviarMensaje(String mensaje)
    {
        estado.setText("Enviando "+ mensaje + " a "+ direccionServidor+":"+ puertoServidor);
        try
        {
            rmiServidor.recibirMensaje(mensaje);
            estado.setText("El mensaje se ha enviado...");
        }
        catch(RemoteException e)
        {
            e.printStackTrace();
        }
    }*/

    public static void main(String[] args)
    {
        conectarAlServidor();
        try
        {
            rmiServidor.Login();
        }
        catch(RemoteException e)
        {
            e.printStackTrace();
        }
    }
}


