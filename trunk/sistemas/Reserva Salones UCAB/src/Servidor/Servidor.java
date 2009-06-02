package Servidor;
import java.io.*;
import java.util.*;
import org.xml.sax.*;
import org.jdom.*;
import org.jdom.output.*;
import org.jdom.input.*;
import org.jdom.Element;

class Servidor
{

	public void Conectar()
    {
	
	}
	
	public void Desconectar()
    {
	
	}

    public static void main(String[] args)
    {
        try{

            SAXBuilder builder=new SAXBuilder(false);
            Document doc = builder.build("C:/SalonSchema.xml");
            /*new XMLOutputter().output(doc, System.out);*/

            Element raiz=doc.getRootElement();
            List<Element> hijos= raiz.getChildren("SalonCincuentenario",Namespace.getNamespace("http://xml.netbeans.org/schema/SalonSchema"));

            for (Element hijo:hijos)
            {
                String valor=hijo.getChildText("dia",Namespace.getNamespace("http://xml.netbeans.org/schema/SalonSchema"));
                System.out.println(valor);
            }
           
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }


    }
}
