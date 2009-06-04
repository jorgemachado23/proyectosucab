/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package rds.servidor.conexion.jrmi;

import java.rmi.RemoteException;
import java.rmi.server.UnicastRemoteObject;
import rds.servidor.control.Servidor;
//import rds.cliente.vista.*;
/**
 *
 * @author Alejandro
 */
public class ImplementorRMI extends UnicastRemoteObject implements InterfaceRMI
{
    private Integer puerto = 3232;

    public Integer getPuerto()
    {
        return puerto;
    }

    public ImplementorRMI() throws RemoteException
    {

    }

    public void Login() throws RemoteException
    {
        Servidor.control.InicioSesion();
    }
    public void Loguot() throws RemoteException
    {

    }
    public void SolicitarSalon() throws RemoteException
    {

    }
    public void AsignarSalon() throws RemoteException
    {

    }
    public void recibirMensaje(String mensaje) throws RemoteException
    {
        Servidor.ventana.ImprimirTexto(mensaje);
    }
}


