
package localhost.service1;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlType;


/**
 * <p>Java class for anonymous complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType>
 *   &lt;complexContent>
 *     &lt;restriction base="{http://www.w3.org/2001/XMLSchema}anyType">
 *       &lt;sequence>
 *         &lt;element name="salon" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *         &lt;element name="fecha" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *         &lt;element name="horaInicial" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *         &lt;element name="horaFinal" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *         &lt;element name="usuario" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *       &lt;/sequence>
 *     &lt;/restriction>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "", propOrder = {
    "salon",
    "fecha",
    "horaInicial",
    "horaFinal",
    "usuario"
})
@XmlRootElement(name = "AsignarSalon")
public class AsignarSalon {

    protected String salon;
    protected String fecha;
    protected String horaInicial;
    protected String horaFinal;
    protected String usuario;

    /**
     * Gets the value of the salon property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getSalon() {
        return salon;
    }

    /**
     * Sets the value of the salon property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setSalon(String value) {
        this.salon = value;
    }

    /**
     * Gets the value of the fecha property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getFecha() {
        return fecha;
    }

    /**
     * Sets the value of the fecha property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setFecha(String value) {
        this.fecha = value;
    }

    /**
     * Gets the value of the horaInicial property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getHoraInicial() {
        return horaInicial;
    }

    /**
     * Sets the value of the horaInicial property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setHoraInicial(String value) {
        this.horaInicial = value;
    }

    /**
     * Gets the value of the horaFinal property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getHoraFinal() {
        return horaFinal;
    }

    /**
     * Sets the value of the horaFinal property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setHoraFinal(String value) {
        this.horaFinal = value;
    }

    /**
     * Gets the value of the usuario property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getUsuario() {
        return usuario;
    }

    /**
     * Sets the value of the usuario property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setUsuario(String value) {
        this.usuario = value;
    }

}
