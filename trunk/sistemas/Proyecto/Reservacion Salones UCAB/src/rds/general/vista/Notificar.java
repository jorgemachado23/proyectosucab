/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package rds.general.vista;

import javax.swing.JOptionPane;
/**
 *
 * @author Alejandro
 */
public class Notificar
{
    /**
     * Da un mensaje de error al usuario
     * @param mensaje mensaje de error
     * @param titulo titulo a mostrar en la ventana
     */
    public static void error(String mensaje,String titulo){
         JOptionPane.showMessageDialog(null,mensaje,titulo,
                    JOptionPane.ERROR_MESSAGE);

    }

    /**
     * Da un mensaje de alerta al usuario
     * @param mensaje mensaje de error
     * @param titulo titulo a mostrar en la ventana
     */
    public static void alerta(String mensaje, String titulo){
        JOptionPane.showMessageDialog(null,mensaje,titulo,
                    JOptionPane.WARNING_MESSAGE);
    }

    /**
     * Da un mensaje de información al usuario
     * @param mensaje mensaje de error
     * @param titulo titulo a mostrar en la ventana
     */
    public static void informacion(String mensaje, String titulo){
        JOptionPane.showMessageDialog(null,mensaje,titulo,
                    JOptionPane.INFORMATION_MESSAGE);
    }

    /**
     * Muestra una ventana de confirmacion con los botones "Si" o "No"
     * @param mensaje Mensaje que se quiere mostrar
     * @param titulo  Titulo que se quiere mostrar
     * @return retorna true si es "Si" y retorna false si es "No"
     */
    public static boolean confirmacionSiNo(String mensaje,String titulo){
        int opcion=JOptionPane.showConfirmDialog(null,mensaje, titulo,JOptionPane.YES_NO_OPTION);
        boolean retorno=true;
        if(opcion==1)
            retorno = false;
        return retorno;
    }

    /**
     * Muestra una ventana de confirmación, con los botones "Acetar" y "Cancelar"
     * @param mensaje Mensaje que se quiere mostrar
     * @param titulo Titulo de la ventana
     * @return Retorna true si se piso "Aceptar", o false si se piso "Cancelar"
     */
    public static boolean confirmacionAceptarCancelar(String mensaje, String titulo){
        int opcion = JOptionPane.showConfirmDialog(null, mensaje, titulo,
                JOptionPane.OK_CANCEL_OPTION);
        boolean retorno = true;
        if (opcion==2)
            retorno = false;
        return retorno;
    }

    /**
     * Muestra una ventana de confirmación, Con los botones "Si","No" y
     * "Cancelar"
     * @param mensaje Mensaje que se quiere mostrar
     * @param titulo Titulo de la ventana
     * @return No usado -> Probar y colocar en la documentación lo que retorna
     */
    public static int confirmacionSiNoCancel(String mensaje, String titulo){
        int retorno = JOptionPane.showConfirmDialog(null, mensaje, titulo,
                JOptionPane.YES_NO_CANCEL_OPTION);
        return retorno;
    }
}
