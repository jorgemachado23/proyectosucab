/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * GUILog.java
 *
 * Created on May 31, 2009, 2:39:30 PM
 */

package vistas;
import java.util.*;
import cliente.Main;
import javax.swing.*;

/**
 *
 * @author Alejandro
 */
public class GUILog extends javax.swing.JFrame {

    /** Creates new form GUILog */
    public GUILog()
    {
        initComponents();
        tableA.getColumnModel().getColumn(0).setHeaderValue("Salon");
        tableA.getColumnModel().getColumn(1).setHeaderValue("Fecha");
        tableA.getColumnModel().getColumn(2).setHeaderValue("Horario");
        tableA.getColumnModel().getColumn(3).setHeaderValue("Usuario");
        tableA.getColumnModel().getColumn(4).setHeaderValue("Tipo de Usuario");
        tableA.setSelectionMode(ListSelectionModel.SINGLE_SELECTION);
        tableB.getColumnModel().getColumn(0).setHeaderValue("Salon");
        tableB.getColumnModel().getColumn(1).setHeaderValue("Fecha");
        tableB.getColumnModel().getColumn(2).setHeaderValue("Horario");
        tableB.getColumnModel().getColumn(3).setHeaderValue("Usuario");
        tableB.getColumnModel().getColumn(4).setHeaderValue("Tipo de Usuario");
        tableB.setSelectionMode(ListSelectionModel.SINGLE_SELECTION);
        LlenarLog();
    }

    public void LlenarLog()
    {
        try
        { // Call Web Service Operation
            localhost.service1.Service1 service = new localhost.service1.Service1();
            localhost.service1.Service1Soap port = service.getService1Soap12();

            localhost.service1.ArrayOfString result = port.salonesAsignados();
            List<String> salonesAsignados = result.getString();

            for(Integer i = 0; i < salonesAsignados.size()/5; i++)
            {
                tableA.setValueAt(salonesAsignados.get(5*i), i, 0);
                tableA.setValueAt(salonesAsignados.get(5*i+1), i, 1);
                tableA.setValueAt(salonesAsignados.get(5*i+2), i, 2);
                tableA.setValueAt(salonesAsignados.get(5*i+3), i, 3);
                tableA.setValueAt(salonesAsignados.get(5*i+4), i, 4);
            }
        }
        catch (Exception ex)
        {
            ex.getStackTrace();
        }


        try
        { // Call Web Service Operation
            localhost.service1.Service1 service = new localhost.service1.Service1();
            localhost.service1.Service1Soap port = service.getService1Soap12();

            localhost.service1.ArrayOfString result = port.salonesPorAsignar();
            List<String> salonesPorAsignar = result.getString();

            for(Integer i = 0; i < salonesPorAsignar.size()/5; i++)
            {
                tableB.setValueAt(salonesPorAsignar.get(5*i), i, 0);
                tableB.setValueAt(salonesPorAsignar.get(5*i+1), i, 1);
                tableB.setValueAt(salonesPorAsignar.get(5*i+2), i, 2);
                tableB.setValueAt(salonesPorAsignar.get(5*i+3), i, 3);
                tableB.setValueAt(salonesPorAsignar.get(5*i+4), i, 4);
            }
        }
        catch (Exception ex)
        {
            ex.getStackTrace();
        }
    }

    /** This method is called from within the constructor to
     * initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is
     * always regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        jScrollPane1 = new javax.swing.JScrollPane();
        tableA = new javax.swing.JTable();
        jPanel2 = new javax.swing.JPanel();
        btnAsignar = new javax.swing.JButton();
        btnRefrescar = new javax.swing.JButton();
        jScrollPane2 = new javax.swing.JScrollPane();
        tableB = new javax.swing.JTable();
        btnBorrar = new javax.swing.JButton();
        btnLogout = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Solicitudes ");

        jPanel1.setBorder(javax.swing.BorderFactory.createTitledBorder("Salones Asignados"));

        tableA.setAutoCreateRowSorter(true);
        tableA.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null}
            },
            new String [] {
                "Title 1", "Title 2", "Title 3", "Title 4", "Title 5"
            }
        ));
        jScrollPane1.setViewportView(tableA);

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jScrollPane1, javax.swing.GroupLayout.DEFAULT_SIZE, 708, Short.MAX_VALUE)
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 207, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        jPanel2.setBorder(javax.swing.BorderFactory.createTitledBorder("Salones Por Asignar"));

        btnAsignar.setText("Asignar");
        btnAsignar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnAsignarActionPerformed(evt);
            }
        });

        btnRefrescar.setText("Refrescar");
        btnRefrescar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnRefrescarActionPerformed(evt);
            }
        });

        tableB.setAutoCreateRowSorter(true);
        tableB.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null},
                {null, null, null, null, null}
            },
            new String [] {
                "Title 1", "Title 2", "Title 3", "Title 4", "Title 5"
            }
        ));
        jScrollPane2.setViewportView(tableB);

        btnBorrar.setText("Borrar");
        btnBorrar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnBorrarActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(btnAsignar)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 244, Short.MAX_VALUE)
                .addComponent(btnBorrar)
                .addGap(233, 233, 233)
                .addComponent(btnRefrescar)
                .addContainerGap())
            .addComponent(jScrollPane2, javax.swing.GroupLayout.DEFAULT_SIZE, 708, Short.MAX_VALUE)
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel2Layout.createSequentialGroup()
                .addComponent(jScrollPane2, javax.swing.GroupLayout.DEFAULT_SIZE, 258, Short.MAX_VALUE)
                .addGap(18, 18, 18)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btnAsignar)
                    .addComponent(btnRefrescar)
                    .addComponent(btnBorrar))
                .addContainerGap())
        );

        btnLogout.setText("Cerrar Sesion");
        btnLogout.setMinimumSize(new java.awt.Dimension(73, 23));
        btnLogout.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnLogoutActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(jPanel2, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jPanel1, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(btnLogout, javax.swing.GroupLayout.Alignment.CENTER, javax.swing.GroupLayout.PREFERRED_SIZE, 126, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jPanel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(btnLogout, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btnLogoutActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnLogoutActionPerformed
        if (Notificar.confirmacionSiNo("Seguro que quiere cerrar la sesion?", "Cerrar Sesion"))
        {
            this.setVisible(false);
            this.dispose();
            Main.ventanaSesion.setVisible(true);
        }
    }//GEN-LAST:event_btnLogoutActionPerformed

    private void btnAsignarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnAsignarActionPerformed

        try
        { // Call Web Service Operation
            localhost.service1.Service1 service = new localhost.service1.Service1();
            localhost.service1.Service1Soap port = service.getService1Soap12();

            int i = tableB.getSelectedRow();
            if (i != -1)
            {
                String salon = tableB.getValueAt(i, 0).toString();
                String fecha = tableB.getValueAt(i, 1).toString();
                String horaInicial = tableB.getValueAt(i, 2).toString().substring(0, 8);
                String horaFinal = tableB.getValueAt(i, 2).toString().substring(11, 19);
                String usuario = tableB.getValueAt(i, 3).toString();
                port.asignarSalon(salon, fecha, horaInicial, horaFinal, usuario);
                for (int j = 0; j < 5; j++)
                {
                    tableB.setValueAt(null, i, j);
                }
                LlenarLog();
            }
        } 
        catch (Exception ex)
        {
            ex.getStackTrace();
        }

    }//GEN-LAST:event_btnAsignarActionPerformed

    private void btnRefrescarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnRefrescarActionPerformed
        LlenarLog();
}//GEN-LAST:event_btnRefrescarActionPerformed

    private void btnBorrarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnBorrarActionPerformed

        try
        { // Call Web Service Operation
            localhost.service1.Service1 service = new localhost.service1.Service1();
            localhost.service1.Service1Soap port = service.getService1Soap12();
            
            int Ai = tableA.getSelectedRow();
            if (Ai != -1)
            {
                String salon = tableA.getValueAt(Ai, 0).toString();
                String fecha = tableA.getValueAt(Ai, 1).toString();
                String horaInicial = tableA.getValueAt(Ai, 2).toString().substring(0, 8);
                String horaFinal = tableA.getValueAt(Ai, 2).toString().substring(11, 19);
                String usuario = tableA.getValueAt(Ai, 3).toString();
                port.asignarSalon(salon, fecha, horaInicial, horaFinal, usuario);
                for (int j = 0; j < 5; j++)
                {
                    tableA.setValueAt(null, Ai, j);
                }
                LlenarLog();
                port.eliminarReservacion(salon, fecha, horaInicial, horaFinal, usuario);
            }
            int Bi = tableB.getSelectedRow();
            if (Bi != -1)
            {
               String salon = tableB.getValueAt(Bi, 0).toString();
                String fecha = tableB.getValueAt(Bi, 1).toString();
                String horaInicial = tableB.getValueAt(Bi, 2).toString().substring(0, 8);
                String horaFinal = tableB.getValueAt(Bi, 2).toString().substring(11, 19);
                String usuario = tableB.getValueAt(Bi, 3).toString();
                port.asignarSalon(salon, fecha, horaInicial, horaFinal, usuario);
                for (int j = 0; j < 5; j++)
                {
                    tableB.setValueAt(null, Bi, j);
                }
                LlenarLog();
                port.eliminarReservacion(salon, fecha, horaInicial, horaFinal, usuario);
            }
        }
        catch (Exception ex)
        {
            ex.getStackTrace();
        }
}//GEN-LAST:event_btnBorrarActionPerformed

    /**
    * @param args the command line arguments
    */
    public static void main(String args[]) {
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new GUILog().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnAsignar;
    private javax.swing.JButton btnBorrar;
    private javax.swing.JButton btnLogout;
    private javax.swing.JButton btnRefrescar;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JTable tableA;
    private javax.swing.JTable tableB;
    // End of variables declaration//GEN-END:variables

}
