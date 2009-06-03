/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package Servidor;

import java.rmi.Remote;
import java.rmi.RemoteException;
/**
 *
 * @author Alejandro
 */
public interface InterfaceRMI extends Remote
{
    boolean Conectar() throws RemoteException;
    boolean Desconectar() throws RemoteException;
    boolean AsignarSalon() throws RemoteException;
    boolean SolicitarSalon() throws RemoteException;
}
