using System;
using System.Data;
using System.Collections;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;

namespace WebService2
{
    public class GestionSalones
    {
        public List<String> GetSalonesAsignados()
        {
            List<String> classrooms = new List<string>();

            try
            {
                XDocument reservacionXML = XDocument.Load(@"C:\Documents and Settings\Alejandro\Desktop\sistemas\Web Service\WebService2\WebService2\App_Data\reservacion.xml");
                var salones = from reservaciones in reservacionXML.Descendants("reservacion")
                              select new
                              {
                                 salon = reservaciones.Element("salon").Value,
                                 fecha = reservaciones.Element("fechaReservacion").Value,
                                 horaInicial = reservaciones.Element("horaInicial").Value,
                                 horaFinal = reservaciones.Element("horaFinal").Value,
                                 usuario = reservaciones.Element("usuario").Value,
                                 tipoUsuario = reservaciones.Element("tipoUsuario").Value,
                                 estado = reservaciones.Element("estado").Value,
                              };

                foreach (var reservacion in salones)
                {
                    if (reservacion.estado.Equals("Reservado"))
                    {
                        String horario = reservacion.horaInicial + " - " + reservacion.horaFinal;
                        classrooms.Add(reservacion.salon);
                        classrooms.Add(reservacion.fecha);
                        classrooms.Add(horario);
                        classrooms.Add(reservacion.usuario);
                        classrooms.Add(reservacion.tipoUsuario);
                    }                    
                }
            }
            catch (Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }

            return classrooms;
        }

        public List<String> GetSalonesPorAsignar()
        {
            List<String> classrooms = new List<string>();

            try
            {
                XDocument reservacionXML = XDocument.Load(@"C:\Documents and Settings\Alejandro\Desktop\sistemas\Web Service\WebService2\WebService2\App_Data\reservacion.xml");
                var salones = from reservaciones in reservacionXML.Descendants("reservacion")
                              select new
                              {
                                  salon = reservaciones.Element("salon").Value,
                                  fecha = reservaciones.Element("fechaReservacion").Value,
                                  horaInicial = reservaciones.Element("horaInicial").Value,
                                  horaFinal = reservaciones.Element("horaFinal").Value,
                                  usuario = reservaciones.Element("usuario").Value,
                                  tipoUsuario = reservaciones.Element("tipoUsuario").Value,
                                  estado = reservaciones.Element("estado").Value,
                              };

                foreach (var reservacion in salones)
                {
                    if (reservacion.estado.Equals("Solicitado"))
                    {
                        String horario = reservacion.horaInicial + " - " + reservacion.horaFinal;
                        classrooms.Add(reservacion.salon);
                        classrooms.Add(reservacion.fecha);
                        classrooms.Add(horario);
                        classrooms.Add(reservacion.usuario);
                        classrooms.Add(reservacion.tipoUsuario);
                    }
                }
            }
            catch (Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }

            return classrooms;
        }

        public int StringEntero(String hora)
        {
            String auxiliar = null;
            Int32 numeroHora = 0;
            auxiliar = hora.Substring(0, 2);

            if (auxiliar.Substring(0, 1).Equals("0"))
            {
                numeroHora = Int32.Parse(auxiliar.Substring(1));
            }
            else
            {
                numeroHora = Int32.Parse(auxiliar);
            }

            return numeroHora;
        }

        public void AsignarSalon(string salon, string fecha, string horaInicial, string horaFinal, string usuario)
        {
            List<String> classrooms = new List<string>();

            try
            {
                XDocument reservacionXML = XDocument.Load(@"C:\Documents and Settings\Alejandro\Desktop\sistemas\Web Service\WebService2\WebService2\App_Data\reservacion.xml");
                var salones = from reservaciones in reservacionXML.Descendants("reservacion")
                              where reservaciones.Element("salon").Value.Equals(salon) &&
                                    reservaciones.Element("fechaReservacion").Value.Equals(fecha) &&
                                    reservaciones.Element("horaInicial").Value.Equals(horaInicial) &&
                                    reservaciones.Element("horaFinal").Value.Equals(horaFinal) &&
                                    reservaciones.Element("usuario").Value.Equals(usuario)
                              select reservaciones.Element("estado");

                salones.ElementAt(0).ReplaceWith(new XElement("estado", "Reservado"));
                reservacionXML.Save(@"C:\Documents and Settings\Alejandro\Desktop\sistemas\Web Service\WebService2\WebService2\App_Data\reservacion.xml");                
            }
            catch (Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
        }

        public List<String> SalonesDisponibles(String salon, String dia, String pedidoInicial, String pedidoFinal, String videoBeam, String aa, String computadora)
        {
            int bandera = 0;
            int contenido = 0;

            List<String> salonesDisponibles = new List<String>();

            try
            {

                Int32 hpedidoI = this.StringEntero(pedidoInicial.Substring(0, 2));

                Int32 mpedidoI = this.StringEntero(pedidoInicial.Substring(3, 5));

                Int32 hpedidoF = this.StringEntero(pedidoFinal.Substring(0, 2));

                Int32 mpedidoF = this.StringEntero(pedidoFinal.Substring(3, 5));

                List<String> horasIniciales = new List<String>();

                List<String> horasFinales = new List<String>();

                XDocument xmlDoc = XDocument.Load(@"C:\Documents and Settings\Alejandro\Desktop\sistemas\Web Service\WebService2\WebService2\App_Data\salon.xml");
                
                if (salon.Equals("Cincuentenario"))
                {
                    var Salones = from Salon in xmlDoc.Descendants("SalonCincuentenario")
                                  where Salon.Element("dia").Element("nombre").Value.Equals(dia)
                                  select new
                                  {
                                      computador = Salon.Element("Computador").Value,
                                      videoBeam = Salon.Element("VideoBeam").Value,
                                      dia = Salon.Element("dia").Element("nombre").Value,
                                      horaInicial = Salon.Element("dia").Element("horas").Elements("horaInicial"),
                                      horaFinal = Salon.Element("dia").Element("horas").Elements("horaFinal"),
                                      aireacondicionado = Salon.Element("AireAcondicionado").Value,
                                      nombre = Salon.Element("Nombre").Value,
                                      Capacidad = Salon.Element("Capacidad").Value

                                  };
                    foreach (var Salon in Salones)
                    {
                        System.Console.WriteLine(Salon.videoBeam);

                        foreach (var hora in Salon.horaInicial)
                        {

                            horasIniciales.Add(hora.Value);

                        }
                        foreach (var hora in Salon.horaFinal)
                        {

                            horasFinales.Add(hora.Value);

                        }

                        if ((Salon.computador.Equals(computadora)) && (Salon.aireacondicionado.Equals(aa)) && (Salon.videoBeam.Equals(videoBeam)))
                        {
                            for (int i = 0; i < horasIniciales.Count; i++)
                            {

                                String horaInicial = horasIniciales.ElementAt(i);
                                String horaFinal = horasFinales.ElementAt(i);
                                Int32 horaI = 0;
                                Int32 horaF = 0;
                                Int32 minutoI = 0;
                                Int32 minutoF = 0;
                                String auxiliar = null;

                                auxiliar = horaInicial.Substring(0, 2);
                                horaI = this.StringEntero(auxiliar);
                                auxiliar = horaInicial.Substring(3, 5);
                                minutoI = this.StringEntero(auxiliar);
                                auxiliar = horaFinal.Substring(0, 2);
                                horaF = this.StringEntero(auxiliar);
                                auxiliar = horaFinal.Substring(3, 5);
                                minutoF = this.StringEntero(auxiliar);

                                if ((hpedidoI > horaI) && (hpedidoI >= horaF))
                                {
                                    if ((hpedidoF >= horaI) && (hpedidoF >= horaF))
                                    {
                                        // posicion = contador2;
                                        bandera = 1;
                                        //  break;
                                    }
                                }
                                else
                                {
                                    if ((hpedidoI >= horaI) && (bandera == 1))
                                    {
                                        contenido = 1;
                                    }
                                }

                            }

                            if ((bandera == 1) && (contenido == 0))
                            {
                                salonesDisponibles.Add(Salon.nombre);
                                salonesDisponibles.Add(Salon.Capacidad);
                            }
                        }

                    }
                }
                else if(salon.Equals("Modulos"))
                {
                    var Salones = from Salon in xmlDoc.Descendants("SalonModulo")
                                  where Salon.Element("dia").Element("nombre").Value.Equals(dia)
                                  select new
                                  {
                                      computador = Salon.Element("Computador").Value,
                                      videoBeam = Salon.Element("VideoBeam").Value,
                                      dia = Salon.Element("dia").Element("nombre").Value,
                                      horaInicial = Salon.Element("dia").Element("horas").Elements("horaInicial"),
                                      horaFinal = Salon.Element("dia").Element("horas").Elements("horaFinal"),
                                      aireacondicionado = Salon.Element("AireAcondicionado").Value,
                                      nombre = Salon.Element("Nombre").Value,
                                      Capacidad = Salon.Element("Capacidad").Value

                                  };
                    foreach (var Salon in Salones)
                    {
                        System.Console.WriteLine(Salon.videoBeam);

                        foreach (var hora in Salon.horaInicial)
                        {

                            horasIniciales.Add(hora.Value);

                        }
                        foreach (var hora in Salon.horaFinal)
                        {

                            horasFinales.Add(hora.Value);

                        }

                        if ((Salon.computador.Equals(computadora)) && (Salon.aireacondicionado.Equals(aa)) && (Salon.videoBeam.Equals(videoBeam)))
                        {
                            for (int i = 0; i < horasIniciales.Count; i++)
                            {

                                String horaInicial = horasIniciales.ElementAt(i);
                                String horaFinal = horasFinales.ElementAt(i);
                                Int32 horaI = 0;
                                Int32 horaF = 0;
                                Int32 minutoI = 0;
                                Int32 minutoF = 0;
                                String auxiliar = null;

                                auxiliar = horaInicial.Substring(0, 2);
                                horaI = this.StringEntero(auxiliar);
                                auxiliar = horaInicial.Substring(3, 5);
                                minutoI = this.StringEntero(auxiliar);
                                auxiliar = horaFinal.Substring(0, 2);
                                horaF = this.StringEntero(auxiliar);
                                auxiliar = horaFinal.Substring(3, 5);
                                minutoF = this.StringEntero(auxiliar);

                                if ((hpedidoI > horaI) && (hpedidoI >= horaF))
                                {
                                    if ((hpedidoF >= horaI) && (hpedidoF >= horaF))
                                    {
                                        // posicion = contador2;
                                        bandera = 1;
                                        //  break;
                                    }
                                }
                                else
                                {
                                    if ((hpedidoI >= horaI) && (bandera == 1))
                                    {
                                        contenido = 1;
                                    }
                                }

                            }

                            if ((bandera == 1) && (contenido == 0))
                            {
                                salonesDisponibles.Add(Salon.nombre);
                                salonesDisponibles.Add(Salon.Capacidad);
                            }
                        }

                    }
                }
                else if(salon.Equals("Laboratorios"))
                {
                    var Salones = from Salon in xmlDoc.Descendants("SalonLaboratorio")
                                  where Salon.Element("dia").Element("nombre").Value.Equals(dia)
                                  select new
                                  {
                                      computador = Salon.Element("Computador").Value,
                                      videoBeam = Salon.Element("VideoBeam").Value,
                                      dia = Salon.Element("dia").Element("nombre").Value,
                                      horaInicial = Salon.Element("dia").Element("horas").Elements("horaInicial"),
                                      horaFinal = Salon.Element("dia").Element("horas").Elements("horaFinal"),
                                      aireacondicionado = Salon.Element("AireAcondicionado").Value,
                                      nombre = Salon.Element("Nombre").Value,
                                      Capacidad = Salon.Element("Capacidad").Value

                                  };
                    foreach (var Salon in Salones)
                    {
                        System.Console.WriteLine(Salon.videoBeam);

                        foreach (var hora in Salon.horaInicial)
                        {

                            horasIniciales.Add(hora.Value);

                        }
                        foreach (var hora in Salon.horaFinal)
                        {

                            horasFinales.Add(hora.Value);

                        }

                        if ((Salon.computador.Equals(computadora)) && (Salon.aireacondicionado.Equals(aa)) && (Salon.videoBeam.Equals(videoBeam)))
                        {
                            for (int i = 0; i < horasIniciales.Count; i++)
                            {

                                String horaInicial = horasIniciales.ElementAt(i);
                                String horaFinal = horasFinales.ElementAt(i);
                                Int32 horaI = 0;
                                Int32 horaF = 0;
                                Int32 minutoI = 0;
                                Int32 minutoF = 0;
                                String auxiliar = null;

                                auxiliar = horaInicial.Substring(0, 2);
                                horaI = this.StringEntero(auxiliar);
                                auxiliar = horaInicial.Substring(3, 5);
                                minutoI = this.StringEntero(auxiliar);
                                auxiliar = horaFinal.Substring(0, 2);
                                horaF = this.StringEntero(auxiliar);
                                auxiliar = horaFinal.Substring(3, 5);
                                minutoF = this.StringEntero(auxiliar);

                                if ((hpedidoI > horaI) && (hpedidoI >= horaF))
                                {
                                    if ((hpedidoF >= horaI) && (hpedidoF >= horaF))
                                    {
                                        // posicion = contador2;
                                        bandera = 1;
                                        //  break;
                                    }
                                }
                                else
                                {
                                    if ((hpedidoI >= horaI) && (bandera == 1))
                                    {
                                        contenido = 1;
                                    }
                                }

                            }

                            if ((bandera == 1) && (contenido == 0))
                            {
                                salonesDisponibles.Add(Salon.nombre);
                                salonesDisponibles.Add(Salon.Capacidad);
                            }
                        }

                    }
                }
                else if(salon.Equals("Postgrado"))
                {
                    var Salones = from Salon in xmlDoc.Descendants("SalonPostgrado")
                                  where Salon.Element("dia").Element("nombre").Value.Equals(dia)
                                  select new
                                  {
                                      computador = Salon.Element("Computador").Value,
                                      videoBeam = Salon.Element("VideoBeam").Value,
                                      dia = Salon.Element("dia").Element("nombre").Value,
                                      horaInicial = Salon.Element("dia").Element("horas").Elements("horaInicial"),
                                      horaFinal = Salon.Element("dia").Element("horas").Elements("horaFinal"),
                                      aireacondicionado = Salon.Element("AireAcondicionado").Value,
                                      nombre = Salon.Element("Nombre").Value,
                                      Capacidad = Salon.Element("Capacidad").Value

                                  };
                    foreach (var Salon in Salones)
                    {
                        System.Console.WriteLine(Salon.videoBeam);

                        foreach (var hora in Salon.horaInicial)
                        {

                            horasIniciales.Add(hora.Value);

                        }
                        foreach (var hora in Salon.horaFinal)
                        {

                            horasFinales.Add(hora.Value);

                        }

                        if ((Salon.computador.Equals(computadora)) && (Salon.aireacondicionado.Equals(aa)) && (Salon.videoBeam.Equals(videoBeam)))
                        {
                            for (int i = 0; i < horasIniciales.Count; i++)
                            {

                                String horaInicial = horasIniciales.ElementAt(i);
                                String horaFinal = horasFinales.ElementAt(i);
                                Int32 horaI = 0;
                                Int32 horaF = 0;
                                Int32 minutoI = 0;
                                Int32 minutoF = 0;
                                String auxiliar = null;

                                auxiliar = horaInicial.Substring(0, 2);
                                horaI = this.StringEntero(auxiliar);
                                auxiliar = horaInicial.Substring(3, 5);
                                minutoI = this.StringEntero(auxiliar);
                                auxiliar = horaFinal.Substring(0, 2);
                                horaF = this.StringEntero(auxiliar);
                                auxiliar = horaFinal.Substring(3, 5);
                                minutoF = this.StringEntero(auxiliar);

                                if ((hpedidoI > horaI) && (hpedidoI >= horaF))
                                {
                                    if ((hpedidoF >= horaI) && (hpedidoF >= horaF))
                                    {
                                        // posicion = contador2;
                                        bandera = 1;
                                        //  break;
                                    }
                                }
                                else
                                {
                                    if ((hpedidoI >= horaI) && (bandera == 1))
                                    {
                                        contenido = 1;
                                    }
                                }

                            }

                            if ((bandera == 1) && (contenido == 0))
                            {
                                salonesDisponibles.Add(Salon.nombre);
                                salonesDisponibles.Add(Salon.Capacidad);
                            }
                        }

                    }
                }              
            }
            catch (Exception e)
            {
                System.Console.Write(e.StackTrace);
            }
            return salonesDisponibles;
        }
    }
}
