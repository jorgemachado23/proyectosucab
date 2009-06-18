package servidor;

import java.io.*;
import java.net.*;
import java.util.*;

public class Servidor implements Runnable
{
     public static int puerto = 5000;
     public static String ruta;
     //private static VentanaServidor pantalla = new VentanaServidor();
     //private static DefaultListModel listModelVacio;
     // private static DefaultListModel listModelCanciones;
     public static Vector usuariosConectados = new Vector();
     public static Vector usuarios = new Vector();


    public Servidor( ) {

              
        }

   public void procesarConexion(Socket canal)
   {
//      iniciar el Gestor de Servicios en un nuevo hilo
        new Thread(new HiloServidor (canal)).start();
   }


public void iniciarServidor()
{
      new Thread(this).start();
}

public void run()
   {
        ServerSocket serverSocket = null;

        Socket communicationSocket = null;

        try {
            serverSocket = new ServerSocket(puerto);

            System.out.println("Servidor iniciado");

            System.out.println("Esperando Coneccion...");
             }
            catch (IOException e) {
            System.out.println("\nEl servidor no pudo ser iniciado, causa: " +
                    e.getMessage());

            return;
        }

        //  escucha la peticion de conexion y la acepta

       while (true) {
            try {

                communicationSocket = serverSocket.accept();
                procesarConexion(communicationSocket);


                }
            catch (IOException ex) {

                System.out.println(ex.getMessage());

                }

        }
    }

    public static void main( String[] arg ) {

    Servidor servidor = new Servidor();
    servidor.iniciarServidor();
    }

}
