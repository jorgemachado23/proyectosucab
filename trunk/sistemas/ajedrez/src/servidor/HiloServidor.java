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
public  class  HiloServidor  implements  Runnable
{
     public Socket jugador;
     public ServerSocket SocketCliente;
     public static DataInputStream entrada = null;
     public static DataOutputStream salida = null;

     public HiloServidor(Socket jugador,DataInputStream entrada,DataOutputStream salida)
     {
         try{
        this.jugador = jugador;
        this.entrada =  new DataInputStream(entrada);
        this.salida = new DataOutputStream(salida);
         }
         catch(Exception e)
         {
            e.getStackTrace();
         }
     }

     @Override
     public synchronized  void run()
     {
            try
            {
                System.out.println(Servidor.usuariosConectados);

              if (Servidor.usuariosConectados.size() < 2)
              {
                 enviarConexion();
                 SeleccionarColor();
              }
              else
              {
                jugar();
              }
                
            }
            catch(Exception e)
            {
                e.printStackTrace();
            }

     }
     public void SeleccionarColor() throws IOException
     {
         String color = entrada.readUTF();

         int flag = 0;
         
         System.out.println(color);

         for (int i = 0 ; i < Servidor.usuariosConectados.size() ; i++)
         {
            Jugador player = (Jugador)Servidor.usuariosConectados.elementAt(i);

            if (player.color.equals(color))
             {
                flag = 1;
             }
         }
         if (flag == 0)
         {
            Jugador player = new Jugador(jugador.getInetAddress().toString(),color);
            Servidor.usuariosConectados.add(player);
            salida.writeUTF("\nSe recibio la respuesta del cliente " + jugador.getInetAddress().getHostName() + " Escogio el color " + color);
         }
         else
         {
            salida.writeUTF("Este color ya fue tomado");
         }

         Jugador player = new Jugador(jugador.getInetAddress().toString(),color);

         Servidor.usuariosConectados.add(player);

     }
public void enviarConexion() throws FileNotFoundException, IOException
     {
            
            System.out.println("Conexion de : " + jugador.getInetAddress().getHostName());

            salida.writeUTF("conectado: Elija un color");

            System.out.println("Enviando respuesta al cliente" + jugador.getInetAddress().getHostName());
           
            System.out.println("Esperando respuesta del cliente" + jugador.getInetAddress().getHostName());

     }

public void jugar() throws IOException
{
      String jugada = entrada.readUTF();

      String posicioninicial = jugada.substring(0, 1);

      String posicionfinal = jugada.substring(2,3);

      System.out.println( posicioninicial + posicionfinal);

}

}
