/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package rds.servidor.control;

import java.net.InetAddress;
import java.rmi.*;
import java.rmi.registry.*;
import java.rmi.server.*;
import javax.swing.JFrame;
import rds.general.vista.Notificar;
import rds.servidor.vista.GUIServidor;
import rds.servidor.xml.ManejoXML;
import rds.servidor.conexion.jrmi.ImplementorRMI;

/**
 *
 * @author Alejandro
 */
public class Servidor extends UnicastRemoteObject
{
    public static GUIServidor ventana;
    ImplementorRMI imp = new ImplementorRMI();
    private int puerto;
    private String IP;
    private Registry registro;

    public Servidor() throws RemoteException
    {
        try
        {
            IP = (InetAddress.getLocalHost()).toString();
        }
        catch(Exception e)
        {
            Notificar.error("No se puede encontrar la direccion IP", "Error");
        }
        puerto = imp.getPuerto();
        ventana.ImprimirTexto("Conexion establecia por...\nEsta direccion="+ IP +", y puerto="+ puerto);

        try
        {
            ImplementorRMI irmi = new ImplementorRMI();
            Naming.rebind("rmi://localhost:3232/Servidor", irmi);
        }
        catch(Exception e)
        {

        }
    }
    

    public static void main(String[] args)
    {
        ventana = new GUIServidor();
        ventana.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        try
        {
            new Servidor();
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
    }
}
