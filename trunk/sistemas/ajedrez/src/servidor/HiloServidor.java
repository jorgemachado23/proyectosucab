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
    String jugador;

     public HiloServidor(String jugador)
     {
         this.jugador = jugador;
     }

     @Override
     public void run()
     {
            try
            {
                System.out.println(jugador);
            }
            catch(Exception e)
            {
                System.out.println(e);
            }
     }
}
