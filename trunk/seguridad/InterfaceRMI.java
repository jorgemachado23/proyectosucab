/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package seguridad;

import java.util.*;
import java.rmi.*;
/**
 *
 * @author alejandro
 */
public interface InterfaceRMI extends Remote
{
    public boolean AutenticarUsuario (String login, String password) throws RemoteException;
    public int Comprar (int x, int y) throws RemoteException;
}
