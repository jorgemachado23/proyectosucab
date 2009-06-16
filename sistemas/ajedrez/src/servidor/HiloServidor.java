/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package servidor;

import java.io.*;
import java.net.*;
import java.util.*;
/**
 *
 * @author Alejandro
 */
public class HiloServidor extends Thread
{
     Socket scli = null;
     Socket scli2 = null;
     Servidor server;

     public HiloServidor(Socket scliente,Socket scliente2,Servidor server)
     {
        
     }

     @Override
     public void run()
     {

     }
}
