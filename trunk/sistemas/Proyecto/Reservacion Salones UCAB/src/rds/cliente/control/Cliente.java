/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package rds.cliente.control;
import java.rmi.*;
import java.rmi.registry.*;
import rds.servidor.conexion.jrmi.InterfaceRMI;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
/**
 *
 * @author Alejandro
 */
public class Cliente extends JFrame implements ActionListener
{
    private JTextField cajaEnviar;
    private JButton botonEnviar;
    private JLabel estado;
    private static InterfaceRMI rmiServidor;
    private static Registry registro;
    private static String direccionServidor = "127.0.0.1";
    private static String puertoServidor = "3232";

    public Cliente()
    {
        super("Cliente RMI");
        getContentPane().setLayout(new BorderLayout());
        cajaEnviar = new JTextField();
        cajaEnviar.addActionListener(this);
        botonEnviar = new JButton("Enviar");
        botonEnviar.addActionListener(this);
        estado = new JLabel("Estado...");
        getContentPane().add(cajaEnviar);
        getContentPane().add(botonEnviar, BorderLayout.EAST);
        getContentPane().add(estado, BorderLayout.WEST);
        setSize(300, 100);
        setVisible(true);
    }

    private static void conectarAlServidor()
    {
        try
        {
            rmiServidor = (InterfaceRMI)Naming.lookup("rmi://localhost:3232/Servidor");
        }
        catch(RemoteException e)
        {
            e.printStackTrace();
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
    }

    public void actionPerformed(ActionEvent e)
    {
        if(!cajaEnviar.getText().equals(""))
        {
            enviarMensaje(cajaEnviar.getText());
            cajaEnviar.setText("");
        }
    }

    private void enviarMensaje(String mensaje)
    {
        estado.setText("Enviando "+ mensaje + " a "+ direccionServidor+":"+ puertoServidor);
        try
        {
            rmiServidor.recibirMensaje(mensaje);
            estado.setText("El mensaje se ha enviado...");
        }
        catch(RemoteException e)
        {
            e.printStackTrace();
        }
    }

    public static void main(String[] args)
    {
        JFrame.setDefaultLookAndFeelDecorated(true);
        conectarAlServidor();
        Cliente ventana = new Cliente();
        ventana.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}


