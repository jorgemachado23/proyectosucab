
package rds.servidor.conexion.jrmi;

import java.rmi.RemoteException;
import java.rmi.server.UnicastRemoteObject;
import rds.servidor.control.Servidor;
import rds.cliente.vista.*;
import java.io.*;
import java.util.*;
import org.xml.sax.*;
import org.jdom.*;
import org.jdom.Content;
import org.jdom.output.*;
import org.jdom.input.*;
import org.jdom.Element;
import java.text.SimpleDateFormat;
import java.text.DateFormat;
import java.util.Date;
import java.sql.Time;
//import rds.cliente.vista.*;
/**
 *
 * @author Alejandro
 */
public class ImplementorRMI extends UnicastRemoteObject implements InterfaceRMI
{
    private Integer puerto = 1099;

    public Integer getPuerto()
    {
        return puerto;
    }

    public ImplementorRMI() throws RemoteException
    {

    }
    @SuppressWarnings("static-access")
    public Integer StringEntero(String hora)
    {
    String auxiliar = null;
    Integer numeroHora = 0;
    auxiliar = hora.substring(0,2);

    if(auxiliar.substring(0,1).equals("0"))
         {
             numeroHora = numeroHora.parseInt(auxiliar.substring(1));
         }
      else
          {
             numeroHora = numeroHora.parseInt(auxiliar);
          }

    return numeroHora;
    }

    //Funcion que devuelve el numero de un dia
    //dado un dia en especifico en un string
    public int NumeroDiaSemana(String dia)
    {
      int numerodia = 10;
        if ((dia.toUpperCase()).equals("MON"))
        {
            numerodia=0;
        }
        if ((dia.toUpperCase()).equals("TUE"))
        {
            numerodia=1;
        }
        if ((dia.toUpperCase()).equals("WED"))
        {
            numerodia=2;
        }
        if ((dia.toUpperCase()).equals("THU"))
        {
            numerodia=3;
        }
        if ((dia.toUpperCase()).equals("FRI"))
        {
            numerodia=4;
        }
        if ((dia.toUpperCase()).equals("SAT"))
        {
            numerodia=5;
        }
        if ((dia.toUpperCase()).equals("SUN"))
        {
            numerodia=6;
        }

    return numerodia;
    }
    //Procedimiento que busca el salon y el dia
    //Y devuelve las horas asociadas al dia
    @SuppressWarnings("static-access")
    public List<String> BuscarSalonDisponible(String salon,String dia,String pedidoInicial,String pedidoFinal,String videoBeam,String aa,String computadora)
    {
        List inventando = new ArrayList();
        //String inventando = new String () ;
        try{

            int bandera = 0;

            int contenido = 0;

            SAXBuilder builder = new SAXBuilder(false);

            Document doc = builder.build("C:/SalonSchema.xml");

            Element raiz=doc.getRootElement();

            List<Element> hijos = raiz.getChildren(salon,Namespace.getNamespace("http://xml.netbeans.org/schema/SalonSchema"));

            Iterator contador = hijos.iterator();

            int numeroDia = this.NumeroDiaSemana(dia);

            int contador2 = 0;

            Integer hpedidoI = this.StringEntero(pedidoInicial.substring(0,2));

            Integer mpedidoI = this.StringEntero(pedidoInicial.substring(3,5));

            Integer hpedidoF = this.StringEntero(pedidoFinal.substring(0,2));

            Integer mpedidoF = this.StringEntero(pedidoFinal.substring(3,5));

                while(contador.hasNext())
                {
                  System.out.println("Horario de clases del "+dia);

                  Element elemento = (Element)contador.next();

                  List<Element> horas = elemento.getChildren("horas",Namespace.getNamespace("http://xml.netbeans.org/schema/horarioSchema"));

                  String videobeams = elemento.getChildText("VideoBeam",Namespace.getNamespace("http://xml.netbeans.org/schema/SalonSchema"));

                  String aires = elemento.getChildText("AireAcondicionado",Namespace.getNamespace("http://xml.netbeans.org/schema/SalonSchema"));

                  String computadores = elemento.getChildText("Computador",Namespace.getNamespace("http://xml.netbeans.org/schema/SalonSchema"));

                  int flag = 0;

                  if ( (computadores.equals(computadora)) && (aires.equals(aa))  && (videobeams.equals(videoBeam))){

                  for( Element hora : horas )
                  {

                   if(numeroDia == flag)
                      {

                          //busco todas las horas que inician clases en la semana
                          List <Element> horaIniciales = hora.getChildren("horaInicial",Namespace.getNamespace("http://xml.netbeans.org/schema/horarioSchema"));
                          List <Element> horaFinales = hora.getChildren("horaFinal",Namespace.getNamespace("http://xml.netbeans.org/schema/horarioSchema"));
                          //recorro y busco solo la del dia que necesito

                          for ( int i = 0; i<horaIniciales.size() ; i++ )
                          {

                            Element horaInicial = horaIniciales.get(i);
                            Element horaFinal = horaFinales.get(i);
                            Integer horaI = 0;
                            Integer horaF = 0;
                            Integer minutoI = 0;
                            Integer minutoF = 0;
                            String auxiliar = null;

                            auxiliar = horaInicial.getText().substring(0,2);
                            horaI = this.StringEntero(auxiliar);
                            auxiliar = horaInicial.getText().substring(3,5);
                            minutoI = this.StringEntero(auxiliar);
                            auxiliar = horaFinal.getText().substring(0,2);
                            horaF = this.StringEntero(auxiliar);
                            auxiliar = horaFinal.getText().substring(3,5);
                            minutoF = this.StringEntero(auxiliar);

                            if ( ( hpedidoI > horaI ) && ( hpedidoI >= horaF ) )
                            {
                                if( ( hpedidoF >= horaI ) && ( hpedidoF >= horaF ) )
                                {
                                   // posicion = contador2;
                                    bandera = 1;
                                  //  break;
                                }
                            }
                            else
                            {
                                if( (hpedidoI >= horaI) && (bandera == 1) )
                                {
                                    contenido = 1;
                                }
                            }

                          }

                           if ( (bandera == 1) && (contenido==0) )

                            {
                                 //System.out.println("Disponible");
                                 //inventando = "Disponible";
                                 inventando.add(elemento.getChildText("Nombre",Namespace.getNamespace("http://xml.netbeans.org/schema/SalonSchema")));
                            }    inventando.add(elemento.getChildText("Capacidad",Namespace.getNamespace("http://xml.netbeans.org/schema/SalonSchema")));
                      }
                      flag++;
                 // contador2++;
                  }
                  }
                  contador2++;
                }
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
     return inventando;
    }
    //Funcion que devuelve true si el usuario existe
    //y false en caso contrario
    public boolean AutenticarUsuario(String nombreusuario,String clave)
    {
       boolean autenticado = false;

        try{

            SAXBuilder builder = new SAXBuilder(false);

            Document doc = builder.build("C:/usuarioSchema.xml");

            Element raiz=doc.getRootElement();

            List<Element> tipousuarios = raiz.getChildren();

            Iterator contador = tipousuarios.iterator();

            while(contador.hasNext())
            {

                Element elemento = (Element)contador.next();

                //System.out.println(elemento.getName());

                List<Element> login = elemento.getChildren("usuario",Namespace.getNamespace("http://xml.netbeans.org/schema/alumnoSchema"));

                List<Element> password = elemento.getChildren("password",Namespace.getNamespace("http://xml.netbeans.org/schema/alumnoSchema"));

                for( int i = 0 ; i < login.size() ; i++ )
                {
                    Element usuario = (Element)login.get(i);
                    Element contrasena = (Element)password.get(i);

                    if ( (usuario.getValue().equals(nombreusuario)) && (contrasena.getValue().equals(clave)) )
                    {
                        autenticado = true;
                    }
                }
            }
          }
        catch(Exception e){

            e.printStackTrace();
        }

        return autenticado;
    }

    public List<String> DatosUsuario(String nombreusuario,String clave)
    {
            List<String> informacion = new ArrayList();

            try{

            SAXBuilder builder = new SAXBuilder(false);

            Document doc = builder.build("C:/usuarioSchema.xml");

            Element raiz=doc.getRootElement();

            List<Element> tipousuarios = raiz.getChildren();

            Iterator contador = tipousuarios.iterator();

            while(contador.hasNext())
            {

                Element elemento = (Element)contador.next();

                //System.out.println(elemento.getName());

                List<Element> login = elemento.getChildren("usuario",Namespace.getNamespace("http://xml.netbeans.org/schema/alumnoSchema"));
                List<Element> nombres = elemento.getChildren("nombre",Namespace.getNamespace("http://xml.netbeans.org/schema/alumnoSchema"));
                List<Element> apellidos = elemento.getChildren("apellido",Namespace.getNamespace("http://xml.netbeans.org/schema/alumnoSchema"));
                List<Element> escDepFac = elemento.getChildren("escDepFac",Namespace.getNamespace("http://xml.netbeans.org/schema/alumnoSchema"));
                List<Element> cedulas = elemento.getChildren("ci",Namespace.getNamespace("http://xml.netbeans.org/schema/alumnoSchema"));
                List<Element> password = elemento.getChildren("password",Namespace.getNamespace("http://xml.netbeans.org/schema/alumnoSchema"));

                for( int i = 0 ; i < login.size() ; i++ )
                {
                    Element usuario = (Element)login.get(i);
                    Element contrasena = (Element)password.get(i);
                    Element name = (Element)nombres.get(i);
                    Element apellido = (Element)apellidos.get(i);
                    Element cedula = (Element)cedulas.get(i);
                    Element dedondeviene = (Element)escDepFac.get(i);

                    if ( (usuario.getValue().equals(nombreusuario)) && (contrasena.getValue().equals(clave)) )
                    {
                        informacion.add(name.getValue());
                        informacion.add(apellido.getValue());
                        informacion.add(cedula.getValue());
                        informacion.add(dedondeviene.getValue());
                        informacion.add(elemento.getName());
                    }

                }
            }
          }
        catch(Exception e){

            e.printStackTrace();
        }
    return informacion;
    }
    public void Loguot() throws RemoteException
    {

    }

    public String getTipoUsuario(String usuario)
    {
        String tipoUsuario = new String();

            try{

            SAXBuilder builder = new SAXBuilder(false);

            Document doc = builder.build("C:/usuarioSchema.xml");

            Element raiz=doc.getRootElement();

            List<Element> tipousuarios = raiz.getChildren();

            Iterator contador = tipousuarios.iterator();

            while(contador.hasNext())
            {

                Element elemento = (Element)contador.next();

                //System.out.println(elemento.getName());

                List<Element> logins = elemento.getChildren("usuario",Namespace.getNamespace("http://xml.netbeans.org/schema/alumnoSchema"));

                for( int i = 0 ; i < logins.size() ; i++ )
                {
                    Element login = (Element)logins.get(i);

                    if (login.getText().equals(usuario)){

                        tipoUsuario = elemento.getName();

                    }

                }
            }
          }
        catch(Exception e){

            e.printStackTrace();
        }
        return tipoUsuario;
    }

    public void SolicitarSalon(String usuario, String fecha, String hora, String salon, String tipoUsuario) throws RemoteException
    {
        Element root = new Element("reservacion");
        Element usuarioE = new Element("usuario");
        Element fechaE = new Element("fecha");
        Element fechaReservacion = new Element("fechaReservacion");
        Element horaI = new Element("horaI");
        Element horaF = new Element("horaF");
        Element salonE = new Element("salon");
        Element tipoUsuarioE = new Element("tipoUsuario");
        DateFormat dateFormat = new SimpleDateFormat("dd-MM-yyyy HH:mm");
        Date date = new Date();



        usuarioE.addContent(usuario);
        fechaE.addContent(dateFormat.format(date).toString());
        fechaReservacion.addContent(fecha);
        horaI.addContent(hora.substring(0, 8));
        horaF.addContent(hora.substring(hora.length()-8, hora.length()));
        salonE.addContent(salon);
        tipoUsuarioE.addContent(tipoUsuario);

        root.addContent(0,usuarioE);
        root.addContent(1, fechaE);
        root.addContent(2, fechaReservacion);
        root.addContent(3, horaI);
        root.addContent(4, horaF);
        root.addContent(5, salonE);
        root.addContent(6, tipoUsuarioE);

        Document doc = new Document(root);

        try
        {
          XMLOutputter out = new XMLOutputter();
          FileOutputStream file=new FileOutputStream("C:/reservacionSchema.xml");
          out.output(doc,file);
          file.flush();
          file.close();
          //out.output(doc,System.out);
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
    }
    public void AsignarSalon() throws RemoteException
    {

    }
    public void recibirMensaje(String mensaje) throws RemoteException
    {
        Servidor.ventana.ImprimirTexto(mensaje);
    }
}


