package Cliente;

import java.rmi.Naming;
import Servidor.InterfaceRMI;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.Socket;
import java.net.UnknownHostException;
import java.util.List;
import java.util.Vector;
import ReservaSalonesUCAB.GUIUsuario;
import ReservaSalonesUCAB.GUISolicitud;
import ReservaSalonesUCAB.Notificaciones;
import org.jdom.Document;
import org.jdom.Element;


class Alumno extends Cliente 
{
    public static Alumno controlAlumno;
    private Socket socket;
    private final Integer puerto = 7869;
    private ObjectInputStream entrada = null;
    private ObjectOutputStream salida = null;
    private GUIUsuario ventanaLogin;
    private GUISolicitud ventanaSolicitud;
    
    public Alumno()
    {
        try
        {            
            socket = new Socket("localhost",puerto); 
            salida = new ObjectOutputStream(socket.getOutputStream());
            entrada = new ObjectInputStream(socket.getInputStream());     
            ventanaLogin = new GUIUsuario();
            ventanaLogin.setLocationRelativeTo(null);
            ventanaLogin.setVisible(true);
        }
        catch (Exception e)
        {
            Notificaciones.error("No se pudo establecer la comunicación con el servidor,\n" +
                                 "verifique que el servidor esté funcionando correctamente",
                                 "Error de comunicación");
        }
    }
    public static void main(String[] args) {
		try
        {   
			//InterfaceRMI h = (InterfaceRMI) Naming.lookup("rmi://localhost:1099/reserva");
		} catch (Exception e)
        {
			//e.printStackTrace();
		}

	}
}
