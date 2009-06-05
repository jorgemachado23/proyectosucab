/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * GUISesion.java
 *
 * Created on May 31, 2009, 3:25:46 PM
 */

package rds.cliente.vista;
import rds.cliente.control.Cliente;
import java.util.*;
import java.rmi.Naming;
import rds.servidor.conexion.jrmi.InterfaceRMI;
//import java.awt.*;
//import java.awt.event.*;

/**
 *
 * @author Alejandro
 */
public class GUISesion extends javax.swing.JFrame{

    /** Creates new form GUISesion */
    public GUISesion() {
        initComponents();
    }

    /** This method is called from within the constructor to
     * initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is
     * always regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        lblTitulo = new javax.swing.JLabel();
        lblUsuario = new javax.swing.JLabel();
        lblContrasena = new javax.swing.JLabel();
        txtUsuario = new javax.swing.JTextField();
        txtContrasena = new javax.swing.JPasswordField();
        jButton1 = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Iniciar Sesion Usuario");

        lblTitulo.setFont(new java.awt.Font("Tahoma", 1, 14));
        lblTitulo.setText("Inicio de sesion");

        lblUsuario.setFont(new java.awt.Font("Tahoma", 0, 12));
        lblUsuario.setText("Usuario:");

        lblContrasena.setFont(new java.awt.Font("Tahoma", 0, 12));
        lblContrasena.setText("Contraseña:");

        jButton1.setText("Iniciar Sesion");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(95, 95, 95)
                .addComponent(lblTitulo, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addGap(99, 99, 99))
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(lblUsuario, javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(lblContrasena, javax.swing.GroupLayout.Alignment.TRAILING))
                .addGap(16, 16, 16)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(txtUsuario, javax.swing.GroupLayout.DEFAULT_SIZE, 163, Short.MAX_VALUE)
                    .addComponent(txtContrasena, javax.swing.GroupLayout.DEFAULT_SIZE, 163, Short.MAX_VALUE))
                .addGap(46, 46, 46))
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addContainerGap(120, Short.MAX_VALUE)
                .addComponent(jButton1)
                .addGap(85, 85, 85))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(33, 33, 33)
                .addComponent(lblTitulo, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.CENTER)
                    .addComponent(txtUsuario)
                    .addComponent(lblUsuario, javax.swing.GroupLayout.DEFAULT_SIZE, 20, Short.MAX_VALUE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.CENTER)
                    .addComponent(txtContrasena)
                    .addComponent(lblContrasena, javax.swing.GroupLayout.DEFAULT_SIZE, 20, Short.MAX_VALUE))
                .addGap(31, 31, 31)
                .addComponent(jButton1)
                .addGap(30, 30, 30))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        try
            {
            Cliente.rmiServidor = (InterfaceRMI)Naming.lookup("rmi://localhost:3232/Servidor");
            boolean autenticado = Cliente.rmiServidor.AutenticarUsuario(txtUsuario.getText(),txtContrasena.getText());
            if (autenticado)
            {
               List<String> tipo = Cliente.rmiServidor.DatosUsuario(txtUsuario.getText(),txtContrasena.getText());
               String tipoUsuario = tipo.get(4);
               if (tipoUsuario.equalsIgnoreCase("alumno") || tipoUsuario.equalsIgnoreCase("profesor"))
               {
                    Cliente.ventanaSolicitud = new GUISolicitud();
                    Cliente.ventanaSolicitud.setVisible(true);
               }
               else if (tipoUsuario.equalsIgnoreCase("encargado"))
               {
                    Cliente.ventanaLog = new GUILog();
                    Cliente.ventanaLog.setVisible(true);
               }
               else
                   throw new Exception();
            }
        }
        catch(Exception e)
        {
            e.printStackTrace();
      }
      this.setVisible(false);
      txtUsuario.setText(null);
      txtContrasena.setText(null);
      this.dispose();
    }//GEN-LAST:event_jButton1ActionPerformed

    /**
    * @param args the command line arguments
    */
    public static void main(String args[]) {
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new GUISesion().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private javax.swing.JLabel lblContrasena;
    private javax.swing.JLabel lblTitulo;
    private javax.swing.JLabel lblUsuario;
    private javax.swing.JPasswordField txtContrasena;
    private javax.swing.JTextField txtUsuario;
    // End of variables declaration//GEN-END:variables

}
