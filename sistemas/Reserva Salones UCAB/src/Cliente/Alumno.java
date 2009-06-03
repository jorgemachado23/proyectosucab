package Cliente;

import java.rmi.Naming;
import Servidor.InterfaceRMI;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.IOException;
import java.net.Socket;
//import java.net.UnknownHostException;
import ReservaSalonesUCAB.GUISesion;
import ReservaSalonesUCAB.GUISolicitud;
import ReservaSalonesUCAB.Notificaciones;
//import org.jdom.Document;
//import org.jdom.Element;


class Alumno extends Cliente 
{
    public static Alumno controlAlumno;
    private Socket socket;
    private final Integer puerto = 7869;
    private ObjectInputStream entrada = null;
    private ObjectOutputStream salida = null;
    private GUISesion ventanaLogin;
    private GUISolicitud ventanaSolicitud;
    
    public Alumno()
    {
        try
        {            
            socket = new Socket("localhost",puerto); 
            salida = new ObjectOutputStream(socket.getOutputStream());
            entrada = new ObjectInputStream(socket.getInputStream());     
            ventanaLogin = new GUISesion();
            ventanaSolicitud = new GUISolicitud();
            //ventanaLogin.setLocationRelativeTo(null);
            //ventanaLogin.setVisible(true);

        }
        catch (Exception e)
        {
            Notificaciones.error("No se pudo establecer la comunicación con el servidor,\n" +
                                 "verifique que el servidor esté funcionando correctamente",
                                 "Error de comunicación");
            salir(-1);
        }
    }
    public static void main(String[] args) {
		try
        {
            controlAlumno = new Alumno();
			InterfaceRMI h = (InterfaceRMI) Naming.lookup("rmi://localhost:1099/reserva");
		} catch (Exception e)
        {
			e.printStackTrace();
		}

	}
    @Override
    public void Login(String usuario, String password)
    {
        
    }
    @Override
    public void Logout()
    {
        ventanaSolicitud.setVisible(false);
        salir(0);
    }

    public void salir(int salida)
    {
       if(salida == 0 && Notificaciones.confirmacionAceptarCancelar(
               "¿Está seguro que desea salir del sistema?","¿Salir?"))
       {
            try
            {
                socket.close();
            }
            catch (IOException e)
            {
                Notificaciones.error("Error al cerrar la conexión con el servidor",
                                     "Error al cerrar");
            }
            System.exit(salida);
       }
       else if (salida==-1)
       {
           System.exit(salida);
       }
    }
   
    public void SolicitarSalon(String horaInicio, String horaFin, String salon, String dia)
    {
        
	}
}