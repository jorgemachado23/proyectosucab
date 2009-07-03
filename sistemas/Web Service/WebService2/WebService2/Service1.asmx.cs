using System;
using System.Collections;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Services;
using System.Web.Services.Protocols;
using System.Xml.Linq;

namespace WebService2
{
    /// <summary>
    /// Summary description for Service1
    /// </summary>
    [WebService(Namespace = "http://localhost/Service1.asmx")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [ToolboxItem(false)]
    // To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
    // [System.Web.Script.Services.ScriptService]
    public class Service1 : System.Web.Services.WebService
    {
        [WebMethod]
        public List<String> VerificarLogin(string login, string password)
        {
            Login loginUsuario = new Login();
            List<String> datos = loginUsuario.LoginUsuario(login, password);
            return datos;
        }

        [WebMethod]
        public List<String> SalonesAsignados()
        {
            GestionSalones salonAsignado = new GestionSalones();
            List<String> datos = salonAsignado.GetSalonesAsignados();
            return datos;
        }

        [WebMethod]
        public List<String> SalonesPorAsignar()
        {
            GestionSalones salonPorAsignar = new GestionSalones();
            List<String> datos = salonPorAsignar.GetSalonesPorAsignar();
            return datos;
        }

        [WebMethod]
        public void AsignarSalon(string salon, string fecha, string horaInicial, string horaFinal, string usuario)
        {
            GestionSalones asignarSalon = new GestionSalones();
            asignarSalon.AsignarSalon(salon, fecha, horaInicial, horaFinal, usuario);            
        }

        [WebMethod]
        public List<String> SalonesDisponibles(String salon, String dia, String horaInicial, String horaFinal, String videoBeam, String aA, String computadora)
        {
            GestionSalones salonDisponible = new GestionSalones();
            List<String> datos = salonDisponible.SalonesDisponibles(salon, dia, horaInicial, horaFinal, videoBeam, aA, computadora);
            return datos;
        }

        [WebMethod]
        public void GenerarReservacion(string usuario, string tipoUsuario, string fechaReservacion, string salon, string horaInicial, string horaFinal)
        {
            Reservacion reservacion = new Reservacion();
            reservacion.GenerarReservacion(usuario, tipoUsuario, fechaReservacion, salon, horaInicial, horaFinal);
        }

        [WebMethod]
        public void EliminarReservacion(string salon, string fecha, string horaInicial, string horaFinal, string usuario)
        {
            Reservacion reservacion = new Reservacion();
            reservacion.EliminarReservacion(salon, fecha, horaInicial, horaFinal, usuario);
        }
    }
}
