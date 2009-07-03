/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package cliente;
//import java.util.*;
import vistas.*;

/**
 *
 * @author Alejandro
 */
public class Main
{
    public static GUISesion ventanaSesion;

    public static void main(String[] args) 
    {
        ventanaSesion = new GUISesion();
        ventanaSesion.setLocationRelativeTo(null);
        ventanaSesion.setVisible(true);
    }

}
