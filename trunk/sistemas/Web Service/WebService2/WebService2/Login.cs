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
    public class Login
    {
        public List<String> LoginUsuario(string login, string password)
        {
            List<String> user = new List<String>();

            try
            {
                XDocument usuarioXML = XDocument.Load(@"C:\Documents and Settings\Alejandro\Desktop\sistemas\Web Service\WebService2\WebService2\App_Data\usuario.xml");
                var alumnos = from usuario in usuarioXML.Descendants("alumno")
                              select new
                              {
                                  login = usuario.Element("usuario").Value,
                                  password = usuario.Element("password").Value,
                              };

                foreach (var usuario in alumnos)
                {
                    if (usuario.login.Equals(login) && usuario.password.Equals(password))
                    {
                        user.Add(login);
                        user.Add("alumno");
                        return user;
                    }
                }

                var profesores = from usuario in usuarioXML.Descendants("profesor")
                                 select new
                                 {
                                     login = usuario.Element("usuario").Value,
                                     password = usuario.Element("password").Value,
                                 };

                foreach (var usuario in profesores)
                {
                    if (usuario.login.Equals(login) && usuario.password.Equals(password))
                    {
                        user.Add(login);
                        user.Add("profesor");
                        return user;
                    }
                }

                var encargados = from usuario in usuarioXML.Descendants("encargado")
                                 select new
                                 {
                                     login = usuario.Element("usuario").Value,
                                     password = usuario.Element("password").Value,
                                 };

                foreach (var usuario in encargados)
                {
                    if (usuario.login.Equals(login) && usuario.password.Equals(password))
                    {
                        user.Add(login);
                        user.Add("encargado");
                        return user;
                    }
                }
            }
            catch (Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }

            return user;
        }
    }
}
