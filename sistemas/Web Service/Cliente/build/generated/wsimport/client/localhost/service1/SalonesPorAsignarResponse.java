
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
 *         &lt;element name="SalonesPorAsignarResult" type="{http://localhost/Service1.asmx}ArrayOfString" minOccurs="0"/>
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
    "salonesPorAsignarResult"
})
@XmlRootElement(name = "SalonesPorAsignarResponse")
public class SalonesPorAsignarResponse {

    @XmlElement(name = "SalonesPorAsignarResult")
    protected ArrayOfString salonesPorAsignarResult;

    /**
     * Gets the value of the salonesPorAsignarResult property.
     * 
     * @return
     *     possible object is
     *     {@link ArrayOfString }
     *     
     */
    public ArrayOfString getSalonesPorAsignarResult() {
        return salonesPorAsignarResult;
    }

    /**
     * Sets the value of the salonesPorAsignarResult property.
     * 
     * @param value
     *     allowed object is
     *     {@link ArrayOfString }
     *     
     */
    public void setSalonesPorAsignarResult(ArrayOfString value) {
        this.salonesPorAsignarResult = value;
    }

}
