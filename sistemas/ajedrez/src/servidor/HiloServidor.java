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


     public HiloServidor(Socket jugador)
     {
        this.jugador = jugador;
     }

     @Override
     public synchronized  void run()
     {
            try
            {
//              if (!Servidor.usuariosConectados.contains(jugador.getInetAddress().getHostName()))
//                 enviarConexion();
//             else
//                 recibirConexion();
                enviarConexion();

            }
            catch(Exception e)
            {
                System.out.println(e);
            }

     }
     public void recibirConexion() throws IOException
     {

            Socket sock = jugador;

            InputStream is = sock.getInputStream();

            DataInputStream entrada = new DataInputStream( is );

            System.out.println(entrada.readUTF());
            
            OutputStream fos = sock.getOutputStream();

            DataOutputStream salida = new DataOutputStream( fos );

            salida.writeUTF("\nSe recibio la respuesta del cliente " + sock.getInetAddress().getHostName());

            is.close();

            salida.close();

            sock.close();

     }
public void enviarConexion() throws FileNotFoundException, IOException
     {
            Socket sock = jugador;

            int puerto = Servidor.puerto;
            
            System.out.println("Coneccion de : " + sock.getInetAddress().getHostName() + " por el puerto " + puerto);

            Servidor.usuariosConectados.add(sock.getInetAddress().getHostName());

            InputStream fis =  jugador.getInputStream();

            BufferedInputStream bis = new BufferedInputStream(fis);

            OutputStream os = sock.getOutputStream();
            
            DataOutputStream salida = new DataOutputStream (os);

            System.out.println("Enviando respuesta al cliente" + sock.getInetAddress().getHostName());

            salida.writeUTF("conetado");

            System.out.println("Esperando respuesta del cliente" + sock.getInetAddress().getHostName());

            os.flush();

            os.close();

            jugador.close();
     }

}
