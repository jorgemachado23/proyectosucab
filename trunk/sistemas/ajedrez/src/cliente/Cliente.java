package cliente;

import java.io.*;
import java.net.*;

public class Cliente {

    static final String HOST = "localhost";

    static final int PUERTO=5000;

    static Socket skCliente = new Socket();

        public Cliente( ) {

                    try{

                    skCliente = new Socket( HOST , PUERTO );

                    InputStream aux = skCliente.getInputStream();

                    DataInputStream flujo = new DataInputStream( aux );

                    System.out.println( flujo.readUTF() );

                    }

                    catch( Exception e ) {

                    System.out.println( e.getMessage() );

                    }

        }

public void CerrarConexion()
{
    try
    {
            skCliente.close();
            System.out.println("Se ha cerrado la conexion con exito");
    }
    catch(Exception e)
    {

            System.out.println( e.getMessage() );
    }

}
public void EnviarComando()
{
    try{
            OutputStream aux = skCliente.getOutputStream();

            DataOutputStream flujo = new DataOutputStream( aux );

            flujo.writeUTF("verga que ladilla");

        }
    catch(Exception e)
    {
    System.out.println( e.getMessage() );
    }

}

        public static void main( String[] arg ) {

        Cliente cliente = new Cliente();
        cliente.EnviarComando();
        cliente.CerrarConexion();
        
        //cliente.CerrarConexion();
        }
    }
