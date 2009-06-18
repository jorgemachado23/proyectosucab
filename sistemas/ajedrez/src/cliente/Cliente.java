package cliente;

import java.io.*;
import java.net.*;

public class Cliente {

    static final String HOST = "localhost";

    static final int PUERTO=5000;

    //static Socket skCliente = new Socket();

        public Cliente( ) {

                   

        }

public void RecibirComando()
{
     try{

            Socket skCliente = new Socket( HOST , PUERTO );

            InputStream aux = skCliente.getInputStream();

            DataInputStream flujo = new DataInputStream( aux );

            System.out.println( flujo.readUTF() );

            }

            catch( Exception e ) {

            System.out.println( e.getMessage() );

            }


      }

        public static void main( String[] arg ) {

        Cliente cliente = new Cliente();

        cliente.RecibirComando();
       // cliente.CerrarConexion();
        
        //cliente.CerrarConexion();
        }
    }
