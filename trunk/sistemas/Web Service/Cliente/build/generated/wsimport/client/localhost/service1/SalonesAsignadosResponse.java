
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
 *         &lt;element name="SalonesAsignadosResult" type="{http://localhost/Service1.asmx}ArrayOfString" minOccurs="0"/>
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
    "salonesAsignadosResult"
})
@XmlRootElement(name = "SalonesAsignadosResponse")
public class SalonesAsignadosResponse {

    @XmlElement(name = "SalonesAsignadosResult")
    protected ArrayOfString salonesAsignadosResult;

    /**
     * Gets the value of the salonesAsignadosResult property.
     * 
     * @return
     *     possible object is
     *     {@link ArrayOfString }
     *     
     */
    public ArrayOfString getSalonesAsignadosResult() {
        return salonesAsignadosResult;
    }

    /**
     * Sets the value of the salonesAsignadosResult property.
     * 
     * @param value
     *     allowed object is
     *     {@link ArrayOfString }
     *     
     */
    public void setSalonesAsignadosResult(ArrayOfString value) {
        this.salonesAsignadosResult = value;
    }

}
