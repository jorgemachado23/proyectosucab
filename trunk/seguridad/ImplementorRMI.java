/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package seguridad;

import java.rmi.*;
import java.rmi.server.*;
import java.rmi.registry.*;
import java.io.*;
import java.net.*;

/**
 *
 * @author alejandro
 */
public class ImplementorRMI extends UnicastRemoteObject implements InterfaceRMI {

    public ImplementorRMI() throws RemoteException {
        super();
    }

    public boolean AutenticarUsuario(String login, String password) throws RemoteException {
        boolean x = false;
        return x;
    }

    public int Comprar(int x, int y) throws RemoteException {
        return x + y;
    }

    public static void main(String[] args) 
    {
        System.setProperty("java.security.policy", "/home/alejandro/java.policy");
        if (System.getSecurityManager() == null) {
            System.setSecurityManager(new RMISecurityManager());
        }

        try {
            //String name = "Servidor";
            InterfaceRMI servidor = new ImplementorRMI();
            //InterfaceRMI stub = new InterfaceRMI();
            Registry registro= LocateRegistry.createRegistry(Registry.REGISTRY_PORT);
            Naming.rebind("rmi://192.168.56.101/Servidor", servidor);
            System.out.println("Servidor bound");
        } catch (Exception e) {
            System.err.println("Servidor exception:");
            e.printStackTrace();
        }
    }
}
