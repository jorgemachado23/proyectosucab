
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
 *         &lt;element name="VerificarLoginResult" type="{http://localhost/Service1.asmx}ArrayOfString" minOccurs="0"/>
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
    "verificarLoginResult"
})
@XmlRootElement(name = "VerificarLoginResponse")
public class VerificarLoginResponse {

    @XmlElement(name = "VerificarLoginResult")
    protected ArrayOfString verificarLoginResult;

    /**
     * Gets the value of the verificarLoginResult property.
     * 
     * @return
     *     possible object is
     *     {@link ArrayOfString }
     *     
     */
    public ArrayOfString getVerificarLoginResult() {
        return verificarLoginResult;
    }

    /**
     * Sets the value of the verificarLoginResult property.
     * 
     * @param value
     *     allowed object is
     *     {@link ArrayOfString }
     *     
     */
    public void setVerificarLoginResult(ArrayOfString value) {
        this.verificarLoginResult = value;
    }

}
