/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package ReservaSalonesUCAB;

import javax.swing.JOptionPane;
/**
 *
 * @author Alejandro
 */
public class Notificaciones
{
    public static void error(String mensaje,String titulo)
    {
         JOptionPane.showMessageDialog(null,mensaje,titulo,
                                       JOptionPane.ERROR_MESSAGE);
    }

    public static void alerta(String mensaje, String titulo)
    {
        JOptionPane.showMessageDialog(null,mensaje,titulo,
                                      JOptionPane.WARNING_MESSAGE);
    }

    public static boolean confirmacionSiNo(String mensaje,String titulo)
    {
        int opcion=JOptionPane.showConfirmDialog(null,mensaje, titulo,
                                                   JOptionPane.YES_NO_OPTION);
        boolean retorno=true;
        if(opcion==1)
            retorno = false;
        return retorno;
    }

    public static boolean confirmacionAceptarCancelar(String mensaje, String titulo)
    {
        int opcion = JOptionPane.showConfirmDialog(null, mensaje, titulo,
                                                   JOptionPane.OK_CANCEL_OPTION);
        boolean retorno = true;
        if (opcion==2)
            retorno = false;
        return retorno;
    }

    public static int confirmacionSiNoCancel(String mensaje, String titulo){
        int retorno = JOptionPane.showConfirmDialog(null, mensaje, titulo,
                JOptionPane.YES_NO_CANCEL_OPTION);
        return retorno;
    }
}
