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
    void Conectar() throws RemoteException;
    void Desconectar() throws RemoteException;
    void AsignarSalon() throws RemoteException;
    void SolicitarSalon() throws RemoteException;
    void Negro() throws RemoteException;
}
