/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package Servidor;

import java.rmi.*;
import java.rmi.server.*;
/**
 *
 * @author Alejandro
 */
public class ImplementorRMI extends UnicastRemoteObject
                               implements InterfaceRMI
{
    public ImplementorRMI() throws RemoteException
    {
        super();
    }
    public boolean Conectar() throws RemoteException
    {
        boolean x = false;
        return x;
    }
    public boolean Desconectar() throws RemoteException
    {
        boolean x = false;
        return x;
    }
    public boolean AsignarSalon() throws RemoteException
    {
        boolean x = false;
        return x;
    }
    public boolean SolicitarSalon() throws RemoteException
    {
        boolean x = false;
        return x;
    }
}
