/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package rds.cliente.control;
//import java.io.IOException;
import java.rmi.*;
//import java.rmi.registry.*;
import rds.servidor.conexion.jrmi.InterfaceRMI;
import rds.cliente.vista.*;
import rds.general.vista.Notificar;
import java.util.*;
/**
 *
 * @author Alejandro
 */
public class Cliente 
{
    public static Cliente control;
    public static GUISesion ventanaSesion;
    public static GUISolicitud ventanaSolicitud;
    public static GUILog ventanaLog;
    public static InterfaceRMI rmiServidor;
    //public static Notificar notify;
    //private static Registry registro;
    //private static String direccionServidor = "127.0.0.1";
    //private static String puertoServidor = "3232";

    public Cliente()
    {
        try
        {
            ventanaSesion = new GUISesion();
            ventanaSesion.setLocationRelativeTo(null);
            ventanaSesion.setVisible(true);
            //boolean x = rmiServidor.AutenticarUsuario();
           // List<String> prueba = rmiServidor.BuscarSalonDisponible("SalonCincuentenario","MON","20:00:00","22:00:00","0","0","0");
            //System.out.println(prueba);
            //System.out.println(x);
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
       
    }

    private static void conectarAlServidor()
    {
        try
        {
            rmiServidor = (InterfaceRMI)Naming.lookup("rmi://localhost:1099/Servidor");
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
           control = new Cliente();
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
    }
}


