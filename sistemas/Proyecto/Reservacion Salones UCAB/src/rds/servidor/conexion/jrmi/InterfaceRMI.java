/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package rds.servidor.conexion.jrmi;

import java.rmi.*;
/**
 *
 * @author Alejandro
 */
public interface InterfaceRMI extends Remote
{
    public void Login() throws RemoteException;
    public void Loguot() throws RemoteException;
    public void SolicitarSalon() throws RemoteException;
    public void AsignarSalon() throws RemoteException;
    public void recibirMensaje(String mensajes) throws RemoteException;
}
