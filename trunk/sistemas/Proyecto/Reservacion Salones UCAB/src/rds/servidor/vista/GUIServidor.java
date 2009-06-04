/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package rds.servidor.vista;

import javax.swing.*;
/**
 *
 * @author Alejandro
 */
public class GUIServidor extends JFrame
{

    /** Creates new form GUIServidor */
    private JTextArea areaTexto;
    public GUIServidor()
    {
        super("Servidor RMI");
        areaTexto = new JTextArea();
        areaTexto.setEditable(false);
        getContentPane().add(new JScrollPane(areaTexto));
        setSize(600, 400);
        setVisible(true);
    }

    public void ImprimirTexto(String texto)
    {
        areaTexto.append(texto + "\n");
    }
}


