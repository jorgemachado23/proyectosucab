package servidor;

import java.io.*;
import java.net.*;

public class Servidor
{
    static final int PUERTO = 5000;

    static Socket skCliente = new Socket();

    public Servidor( ) {

                try {

                ServerSocket skServidor = new ServerSocket( PUERTO );

                System.out.println("Escucho el puerto " + PUERTO );

                   if (true){

                            skCliente = skServidor.accept(); // Crea objeto

                            System.out.println("Sirvo al cliente " + skCliente);

                            OutputStream aux = skCliente.getOutputStream();

                            DataOutputStream flujo= new DataOutputStream( aux );

                            flujo.writeUTF( "Establecida la conexion con el cliente " + skServidor );

                            //this.RecibirComando();
                         
                                }
                }
                catch( Exception e ) {

                System.out.println( e.getMessage() );

                }

        }

public void RecibirComando()
{
    try{

        InputStream aux = skCliente.getInputStream();

        DataInputStream flujo = new DataInputStream( aux );

        System.out.println( flujo.readUTF() );

        skCliente.close();

    }
    catch(Exception e)
    {

    System.out.println( e.getMessage() );

    }
}


    public static void main( String[] arg ) {

    Servidor servidor = new Servidor();
    servidor.RecibirComando();
    HiloServidor jugador = new HiloServidor("blanco");
    jugador.start();

    }

}
