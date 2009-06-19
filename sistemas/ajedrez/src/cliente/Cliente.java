package cliente;

import java.io.*;

import java.net.*;

public class Cliente {

    static final String HOST = "192.168.23.176";

    static final int PUERTO = 5000;
    
    static Socket skCliente = null;


    public Cliente( ) {
        try{

             skCliente = new Socket( HOST , PUERTO );
        }
        catch(Exception e)
        {

        System.out.println(e.getMessage());
        }
        }

public void EnviarComando()
{
     try{

            InputStream aux = skCliente.getInputStream();

            DataInputStream flujo = new DataInputStream( aux );

            System.out.println( flujo.readUTF() );

            }

            catch( Exception e ) {

            System.out.println( e.getMessage() );

            }


      }
public void SeleccionarColor()
{
    boolean flag = false;

        try
        {

            InputStream entrada = skCliente.getInputStream();

            DataInputStream flujollegada = new DataInputStream(entrada);

            String respuesta = flujollegada.readUTF();

            System.out.println(respuesta);

        }
        catch(Exception e)
        {

            e.printStackTrace();

        }

        
}
public void jugar(String enviarjuego)
{
    try{
            //skCliente = new Socket( HOST , PUERTO );

            OutputStream aux = skCliente.getOutputStream();

            DataOutputStream flujosalida = new DataOutputStream(aux);

            flujosalida.writeUTF(enviarjuego);

            InputStream entrada = skCliente.getInputStream();

            DataInputStream flujollegada = new DataInputStream(entrada);

            String respuesta = flujollegada.readUTF();

            System.out.println(respuesta);

    }
    catch(Exception e)
    {

        e.getStackTrace();

    }

}
        public static void main( String[] arg ) {

        Cliente cliente = new Cliente();
        
        cliente.EnviarComando();


        BufferedReader br2 = new BufferedReader(new InputStreamReader(System.in));

        BufferedReader br3 = new BufferedReader(new InputStreamReader(System.in));
        try
        {

                cliente.SeleccionarColor();

                System.out.println("Coloque la posicion inicial");

                String posicioninicial = br2.readLine();

                System.out.println("Coloque la posicion final");

                String posicionfinal = br3.readLine();

                String enviarJuego = posicioninicial.concat("/").concat(posicionfinal);

                cliente.jugar(enviarJuego);


        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
        

        }
    }
