/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package servidor;

import java.io.*;
import java.net.*;
/**
 *
 * @author Alejandro
 */
public class Servidor
{
    public Servidor()
    {

    }

    public void runServer()
    {
      ServerSocket serv = null;//para comunicacion
      ServerSocket serv2 = null;//para enviar mensajes
      boolean listening = true;
      try
      {
         serv = new ServerSocket(8081);
         serv2 = new ServerSocket(8082);
         while(listening)
         {
            Socket sock = null, sock2 = null;
            try
            {
               sock = serv.accept();
               sock2 = serv2.accept();
            }
            catch (IOException e)
            {
               continue;
            }
        HiloServidor user = new HiloServidor(sock, sock2, this);
        user.start();
        }
      }
      catch(IOException e)
      {
         e.printStackTrace();
      }
    }
    public static void main(String[] args) throws IOException
    {
        Servidor server = new Servidor();
        server.runServer();
    }
}
