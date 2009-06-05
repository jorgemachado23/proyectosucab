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
    public void Conectar() throws RemoteException
    {
        
    }
    public void Desconectar() throws RemoteException
    {
        
    }
    public void AsignarSalon() throws RemoteException
    {
        
    }
    public void SolicitarSalon() throws RemoteException
    {
        
    }
    public void Negro() throws RemoteException
    {
        System.out.println("NEGRO PATO!!! XD");
    }
}
