/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package rds.servidor.conexion.jrmi;

import java.util.*;
import java.rmi.*;
/**
 *
 * @author Alejandro
 */
public interface InterfaceRMI extends Remote
{
    public boolean AutenticarUsuario(String nombreusuario,String clave) throws RemoteException;
    public void Loguot() throws RemoteException;
    public void SolicitarSalon() throws RemoteException;
    public void AsignarSalon() throws RemoteException;
    public void recibirMensaje(String mensajes) throws RemoteException;
    public List<String> DatosUsuario(String nombreusuario,String clave) throws RemoteException;
    public void BuscarSalonDisponible(String salon,String dia,String pedidoInicial,String pedidoFinal) throws RemoteException;
    
}
