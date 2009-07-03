
package localhost.service1;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
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
 *         &lt;element name="dia" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *         &lt;element name="horaInicial" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *         &lt;element name="horaFinal" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *         &lt;element name="videoBeam" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *         &lt;element name="aA" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *         &lt;element name="computadora" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
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
    "dia",
    "horaInicial",
    "horaFinal",
    "videoBeam",
    "aa",
    "computadora"
})
@XmlRootElement(name = "SalonesDisponibles")
public class SalonesDisponibles {

    protected String salon;
    protected String dia;
    protected String horaInicial;
    protected String horaFinal;
    protected String videoBeam;
    @XmlElement(name = "aA")
    protected String aa;
    protected String computadora;

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
     * Gets the value of the dia property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getDia() {
        return dia;
    }

    /**
     * Sets the value of the dia property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setDia(String value) {
        this.dia = value;
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
     * Gets the value of the videoBeam property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getVideoBeam() {
        return videoBeam;
    }

    /**
     * Sets the value of the videoBeam property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setVideoBeam(String value) {
        this.videoBeam = value;
    }

    /**
     * Gets the value of the aa property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getAA() {
        return aa;
    }

    /**
     * Sets the value of the aa property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setAA(String value) {
        this.aa = value;
    }

    /**
     * Gets the value of the computadora property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getComputadora() {
        return computadora;
    }

    /**
     * Sets the value of the computadora property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setComputadora(String value) {
        this.computadora = value;
    }

}
