package rds.servidor.xml;
import java.io.*;
import java.util.*;
import org.xml.sax.*;
import org.jdom.*;
import org.jdom.output.*;
import org.jdom.input.*;
import org.jdom.Element;
import java.text.SimpleDateFormat;
import java.text.DateFormat;
import java.util.Date;

public class ManejoXML {

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
        if ((dia.toUpperCase()).equals("LUNES"))
        {
            numerodia=0;
        }
        if ((dia.toUpperCase()).equals("MARTES"))
        {
            numerodia=1;
        }
        if ((dia.toUpperCase()).equals("MIERCOLES"))
        {
            numerodia=2;
        }
        if ((dia.toUpperCase()).equals("JUEVES"))
        {
            numerodia=3;
        }
        if ((dia.toUpperCase()).equals("VIERNES"))
        {
            numerodia=4;
        }
        if ((dia.toUpperCase()).equals("SABADO"))
        {
            numerodia=5;
        }
        if ((dia.toUpperCase()).equals("DOMINGO"))
        {
            numerodia=6;
        }

    return numerodia;
    }
    //Procedimiento que busca el salon y el dia
    //Y devuelve las horas asociadas al dia
    @SuppressWarnings("static-access")
    public void BuscarSalonDisponible(String salon,String dia,String pedidoInicial,String pedidoFinal)
    {
        try{

            int bandera = 0;

            int contenido = 0;

            SAXBuilder builder = new SAXBuilder(false);

            Document doc = builder.build("C:/SalonSchema.xml");

            Element raiz=doc.getRootElement();

            List<Element> hijos = raiz.getChildren(salon,Namespace.getNamespace("http://xml.netbeans.org/schema/SalonSchema"));

            Iterator contador = hijos.iterator();

            int numeroDia = this.NumeroDiaSemana(dia);

            Integer hpedidoI = this.StringEntero(pedidoInicial.substring(0,2));

            Integer mpedidoI = this.StringEntero(pedidoInicial.substring(3,5));

            Integer hpedidoF = this.StringEntero(pedidoFinal.substring(0,2));

            Integer mpedidoF = this.StringEntero(pedidoFinal.substring(3,5));

                while(contador.hasNext())
                {
                  System.out.println("Horario de clases del "+dia);
                  Element elemento = (Element)contador.next();
                  List<Element> horas = elemento.getChildren("horas",Namespace.getNamespace("http://xml.netbeans.org/schema/horarioSchema"));
                  int flag = 0;
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
                                 System.out.println("Disponible");

                            }
                      }
                      flag++;
                  }

                }
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }

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


}
