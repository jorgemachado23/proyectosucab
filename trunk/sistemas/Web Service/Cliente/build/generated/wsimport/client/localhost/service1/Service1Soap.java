
package localhost.service1;

import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebResult;
import javax.jws.WebService;
import javax.xml.bind.annotation.XmlSeeAlso;
import javax.xml.ws.RequestWrapper;
import javax.xml.ws.ResponseWrapper;


/**
 * This class was generated by the JAX-WS RI.
 * JAX-WS RI 2.1.4-b01-
 * Generated source version: 2.1
 * 
 */
@WebService(name = "Service1Soap", targetNamespace = "http://localhost/Service1.asmx")
@XmlSeeAlso({
    ObjectFactory.class
})
public interface Service1Soap {


    /**
     * 
     * @param login
     * @param password
     * @return
     *     returns localhost.service1.ArrayOfString
     */
    @WebMethod(operationName = "VerificarLogin", action = "http://localhost/Service1.asmx/VerificarLogin")
    @WebResult(name = "VerificarLoginResult", targetNamespace = "http://localhost/Service1.asmx")
    @RequestWrapper(localName = "VerificarLogin", targetNamespace = "http://localhost/Service1.asmx", className = "localhost.service1.VerificarLogin")
    @ResponseWrapper(localName = "VerificarLoginResponse", targetNamespace = "http://localhost/Service1.asmx", className = "localhost.service1.VerificarLoginResponse")
    public ArrayOfString verificarLogin(
        @WebParam(name = "login", targetNamespace = "http://localhost/Service1.asmx")
        String login,
        @WebParam(name = "password", targetNamespace = "http://localhost/Service1.asmx")
        String password);

    /**
     * 
     * @return
     *     returns localhost.service1.ArrayOfString
     */
    @WebMethod(operationName = "SalonesAsignados", action = "http://localhost/Service1.asmx/SalonesAsignados")
    @WebResult(name = "SalonesAsignadosResult", targetNamespace = "http://localhost/Service1.asmx")
    @RequestWrapper(localName = "SalonesAsignados", targetNamespace = "http://localhost/Service1.asmx", className = "localhost.service1.SalonesAsignados")
    @ResponseWrapper(localName = "SalonesAsignadosResponse", targetNamespace = "http://localhost/Service1.asmx", className = "localhost.service1.SalonesAsignadosResponse")
    public ArrayOfString salonesAsignados();

    /**
     * 
     * @return
     *     returns localhost.service1.ArrayOfString
     */
    @WebMethod(operationName = "SalonesPorAsignar", action = "http://localhost/Service1.asmx/SalonesPorAsignar")
    @WebResult(name = "SalonesPorAsignarResult", targetNamespace = "http://localhost/Service1.asmx")
    @RequestWrapper(localName = "SalonesPorAsignar", targetNamespace = "http://localhost/Service1.asmx", className = "localhost.service1.SalonesPorAsignar")
    @ResponseWrapper(localName = "SalonesPorAsignarResponse", targetNamespace = "http://localhost/Service1.asmx", className = "localhost.service1.SalonesPorAsignarResponse")
    public ArrayOfString salonesPorAsignar();

    /**
     * 
     * @param horaInicial
     * @param horaFinal
     * @param salon
     * @param fecha
     * @param usuario
     */
    @WebMethod(operationName = "AsignarSalon", action = "http://localhost/Service1.asmx/AsignarSalon")
    @RequestWrapper(localName = "AsignarSalon", targetNamespace = "http://localhost/Service1.asmx", className = "localhost.service1.AsignarSalon")
    @ResponseWrapper(localName = "AsignarSalonResponse", targetNamespace = "http://localhost/Service1.asmx", className = "localhost.service1.AsignarSalonResponse")
    public void asignarSalon(
        @WebParam(name = "salon", targetNamespace = "http://localhost/Service1.asmx")
        String salon,
        @WebParam(name = "fecha", targetNamespace = "http://localhost/Service1.asmx")
        String fecha,
        @WebParam(name = "horaInicial", targetNamespace = "http://localhost/Service1.asmx")
        String horaInicial,
        @WebParam(name = "horaFinal", targetNamespace = "http://localhost/Service1.asmx")
        String horaFinal,
        @WebParam(name = "usuario", targetNamespace = "http://localhost/Service1.asmx")
        String usuario);

    /**
     * 
     * @param horaInicial
     * @param videoBeam
     * @param horaFinal
     * @param salon
     * @param computadora
     * @param aA
     * @param dia
     * @return
     *     returns localhost.service1.ArrayOfString
     */
    @WebMethod(operationName = "SalonesDisponibles", action = "http://localhost/Service1.asmx/SalonesDisponibles")
    @WebResult(name = "SalonesDisponiblesResult", targetNamespace = "http://localhost/Service1.asmx")
    @RequestWrapper(localName = "SalonesDisponibles", targetNamespace = "http://localhost/Service1.asmx", className = "localhost.service1.SalonesDisponibles")
    @ResponseWrapper(localName = "SalonesDisponiblesResponse", targetNamespace = "http://localhost/Service1.asmx", className = "localhost.service1.SalonesDisponiblesResponse")
    public ArrayOfString salonesDisponibles(
        @WebParam(name = "salon", targetNamespace = "http://localhost/Service1.asmx")
        String salon,
        @WebParam(name = "dia", targetNamespace = "http://localhost/Service1.asmx")
        String dia,
        @WebParam(name = "horaInicial", targetNamespace = "http://localhost/Service1.asmx")
        String horaInicial,
        @WebParam(name = "horaFinal", targetNamespace = "http://localhost/Service1.asmx")
        String horaFinal,
        @WebParam(name = "videoBeam", targetNamespace = "http://localhost/Service1.asmx")
        String videoBeam,
        @WebParam(name = "aA", targetNamespace = "http://localhost/Service1.asmx")
        String aA,
        @WebParam(name = "computadora", targetNamespace = "http://localhost/Service1.asmx")
        String computadora);

}