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
    public class Reservacion
    {
        public void GenerarReservacion(string usuario, string tipoUsuario, string fechaReservacion, string salon, string horaInicial, string horaFinal)
        {
            String hoy = DateTime.Now.ToString();
            XDocument reservacionXML = XDocument.Load(@"C:\Documents and Settings\Alejandro\Desktop\sistemas\Web Service\WebService2\WebService2\App_Data\reservacion.xml");

            reservacionXML.Element("reservaciones").Add(new XElement("reservacion", new XElement("usuario", usuario), 
            new XElement("fecha", hoy), new XElement("fechaReservacion", fechaReservacion), new XElement("horaInicial", horaInicial),
            new XElement("horaFinal", horaFinal), new XElement("salon", salon), new XElement("estado", "Solicitado"), new XElement("tipoUsuario", tipoUsuario)));

            reservacionXML.Save(@"C:\Documents and Settings\Alejandro\Desktop\sistemas\Web Service\WebService2\WebService2\App_Data\reservacion.xml");
        }

        public void EliminarReservacion(string salon, string fecha, string horaInicial, string horaFinal, string usuario)
        {
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

                salones.ElementAt(0).ReplaceWith(new XElement("estado", "Eliminado"));
                reservacionXML.Save(@"C:\Documents and Settings\Alejandro\Desktop\sistemas\Web Service\WebService2\WebService2\App_Data\reservacion.xml");
            }
            catch (Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
        }
    }
}
