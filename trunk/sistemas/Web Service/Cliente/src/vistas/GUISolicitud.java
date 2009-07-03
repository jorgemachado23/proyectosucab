/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * GUISolicitud.java
 *
 * Created on May 31, 2009, 3:29:19 PM
 */

package vistas;
import cliente.Main;
import javax.swing.*;
import java.util.*;

/**
 *
 * @author Alejandro
 */
public class GUISolicitud extends javax.swing.JFrame {

    /** Creates new form GUISolicitud */
    public GUISolicitud()
    {
        initComponents();
        table.getColumnModel().getColumn(0).setHeaderValue("Salon");
        table.getColumnModel().getColumn(1).setHeaderValue("Capacidad");
    }

    /** This method is called from within the constructor to
     * initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is
     * always regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jFormattedTextField1 = new javax.swing.JFormattedTextField();
        jSpinField1 = new com.toedter.components.JSpinField();
        btnCerrar = new javax.swing.JButton();
        btnSolicitar = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();
        cmbLocacion = new javax.swing.JComboBox();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        btnBuscar = new javax.swing.JButton();
        ckbAire = new javax.swing.JCheckBox();
        ckbVideo = new javax.swing.JCheckBox();
        ckbComputador = new javax.swing.JCheckBox();
        jScrollPane1 = new javax.swing.JScrollPane();
        table = new javax.swing.JTable();
        txtHoraF = new javax.swing.JTextField();
        txtHoraI = new javax.swing.JTextField();
        calendario = new com.toedter.calendar.JDateChooser();

        jFormattedTextField1.setText("jFormattedTextField1");

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Solicitar Salon");

        btnCerrar.setText("Cerrar Sesion");
        btnCerrar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnCerrarActionPerformed(evt);
            }
        });

        btnSolicitar.setText("Solicitar");
        btnSolicitar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnSolicitarActionPerformed(evt);
            }
        });

        jLabel1.setText("Lugar:");

        cmbLocacion.setModel(new javax.swing.DefaultComboBoxModel(new String[] { "Laboratorios", "Modulos", "Cincuentenario", "Postgrado" }));

        jLabel2.setText("Dia:");

        jLabel3.setText("Hora Inicial:");

        jLabel4.setText("Hora Final:");

        btnBuscar.setText("Buscar");
        btnBuscar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnBuscarActionPerformed(evt);
            }
        });

        ckbAire.setText("Aire Acondicionado");

        ckbVideo.setText("Video Beam");

        ckbComputador.setText("Computadoras");

        table.setAutoCreateRowSorter(true);
        table.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null},
                {null, null}
            },
            new String [] {
                "Title 1", "Title 2"
            }
        ) {
            Class[] types = new Class [] {
                java.lang.String.class, java.lang.String.class
            };
            boolean[] canEdit = new boolean [] {
                false, false
            };

            public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
            }

            public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit [columnIndex];
            }
        });
        jScrollPane1.setViewportView(table);

        calendario.setDateFormatString("EEE, MM/dd/yyyy");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jScrollPane1, javax.swing.GroupLayout.DEFAULT_SIZE, 676, Short.MAX_VALUE)
                        .addContainerGap())
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(btnSolicitar)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 510, Short.MAX_VALUE)
                        .addComponent(btnCerrar)
                        .addContainerGap())
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addGroup(layout.createSequentialGroup()
                                .addComponent(jLabel1)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                                        .addComponent(btnBuscar)
                                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                        .addComponent(jLabel4))
                                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                                        .addComponent(cmbLocacion, javax.swing.GroupLayout.PREFERRED_SIZE, 144, javax.swing.GroupLayout.PREFERRED_SIZE)
                                        .addGap(49, 49, 49)
                                        .addComponent(jLabel2))))
                            .addComponent(jLabel3))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(calendario, javax.swing.GroupLayout.PREFERRED_SIZE, 143, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING, false)
                                .addComponent(txtHoraF, javax.swing.GroupLayout.Alignment.LEADING)
                                .addComponent(txtHoraI, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.PREFERRED_SIZE, 122, javax.swing.GroupLayout.PREFERRED_SIZE)))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 95, Short.MAX_VALUE)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(ckbAire)
                            .addComponent(ckbVideo)
                            .addComponent(ckbComputador))
                        .addGap(80, 80, 80))))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                                .addComponent(jLabel1)
                                .addComponent(cmbLocacion, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addComponent(jLabel2))
                            .addComponent(calendario, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(18, 18, 18)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(txtHoraI, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel3))
                        .addGap(45, 45, 45))
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(ckbAire)
                        .addGap(16, 16, 16)
                        .addComponent(ckbVideo)
                        .addGap(18, 18, 18)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(ckbComputador)
                            .addComponent(txtHoraF, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel4)
                            .addComponent(btnBuscar))))
                .addGap(18, 18, 18)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 393, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(43, 43, 43)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btnSolicitar)
                    .addComponent(btnCerrar))
                .addContainerGap())
        );

        txtHoraF.getAccessibleContext().setAccessibleName("txtHoraF");
        txtHoraI.getAccessibleContext().setAccessibleName("txtHoraI");

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btnBuscarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnBuscarActionPerformed
        try
        {
            for (int j = 0; j < table.getRowCount(); j++)
            {
                table.setValueAt(null, j, 0);
                table.setValueAt(null, j, 1);
            }
            table.setSelectionMode(ListSelectionModel.SINGLE_SELECTION);
            String location = cmbLocacion.getSelectedItem().toString();
            String date = calendario.getDate().toString();           
            String hourI = txtHoraI.getText();
            String hourF = txtHoraF.getText();
            String day = new String();
            if (!date.isEmpty() && !hourI.isEmpty() && !hourF.isEmpty())
            {
                day = date.substring(0, 3);
            }
            else
            {
                throw new Exception();
            }
            if (day.equalsIgnoreCase("mon"))
            {
                day = "Lunes";
            }
            else if (day.equalsIgnoreCase("tue"))
            {
                day = "Martes";
            }
            else if (day.equalsIgnoreCase("wed"))
            {
                day = "Miercoles";
            }
            else if (day.equalsIgnoreCase("thu"))
            {
                day = "Jueves";
            }
            else if (day.equalsIgnoreCase("fri"))
            {
                day = "Viernes";
            }
            else if (day.equalsIgnoreCase("sat"))
            {
                day = "Sabado";
            }
            else if (day.equalsIgnoreCase("sun"))
            {
                day = "Domingo";
            }
            String air = "0";
            if (ckbAire.isSelected())
            {
                air = "1";
                //System.out.println(air);
            }
            String video = "0";
            if (ckbVideo.isSelected())
            {
                video = "1";
                //System.out.println(video);
            }
            String pc = "0";
            if (ckbComputador.isSelected())
            {
                pc = "1";
                //System.out.println(pc);
            }
            // Call Web Service Operation
            localhost.service1.Service1 service = new localhost.service1.Service1();
            localhost.service1.Service1Soap port = service.getService1Soap12();
            
            String salon = location;
            String dia = day;
            String horaInicial = hourI;
            String horaFinal = hourF;
            String videoBeam = video;
            String aA = air;
            String computadora = pc;
            
            localhost.service1.ArrayOfString result = port.salonesDisponibles(salon, dia, horaInicial, horaFinal, videoBeam, aA, computadora);

            List<String> datosSalon = result.getString();

            for(Integer i = 0; i < datosSalon.size()/2 ; i++)
            {
                table.setValueAt(datosSalon.get(2*i), i, 0);
                table.setValueAt(datosSalon.get(2*i+1), i, 1);
            }

        }

        catch(Exception e)
        {
            Notificar.error("Los campos de fecha y de horarios deben ser llenados", "Error");
        }
    }//GEN-LAST:event_btnBuscarActionPerformed

    private void btnCerrarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnCerrarActionPerformed
        if (Notificar.confirmacionSiNo("Seguro que quiere cerrar la sesion?", "Cerrar Sesion"))
        {
            this.setVisible(false);
            this.dispose();
            Main.ventanaSesion.setVisible(true);
        }
    }//GEN-LAST:event_btnCerrarActionPerformed

    private void btnSolicitarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnSolicitarActionPerformed
        try
        { // Call Web Service Operation
            localhost.service1.Service1 service = new localhost.service1.Service1();
            localhost.service1.Service1Soap port = service.getService1Soap12();
            int i = table.getSelectedRow();
            String titulo = this.getTitle();
            String[] tituloDatos = titulo.split(" ");
            String[] fecha = calendario.getDate().toString().split(" ");
            String mes = fecha[1];
            String usuario = tituloDatos[2];
            String tipoUsuario = tituloDatos[0];
            String fechaReservacion = fecha[0]+", "+mes+"/"+fecha[2]+"/"+fecha[5];
            String salon = table.getValueAt(i, 0).toString();
            String horaInicial = txtHoraI.getText();
            String horaFinal = txtHoraF.getText();
            port.generarReservacion(usuario, tipoUsuario, fechaReservacion, salon, horaInicial, horaFinal);
            for (int j = 0; j < table.getRowCount(); j++)
            {
                table.setValueAt(null, j, 0);
                table.setValueAt(null, j, 1);
            }
        }
        catch (Exception ex)
        {
            ex.getStackTrace();
        }

    }//GEN-LAST:event_btnSolicitarActionPerformed

    /**
    * @param args the command line arguments
    */
    public static void main(String args[]) {
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new GUISolicitud().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnBuscar;
    private javax.swing.JButton btnCerrar;
    private javax.swing.JButton btnSolicitar;
    private com.toedter.calendar.JDateChooser calendario;
    private javax.swing.JCheckBox ckbAire;
    private javax.swing.JCheckBox ckbComputador;
    private javax.swing.JCheckBox ckbVideo;
    private javax.swing.JComboBox cmbLocacion;
    private javax.swing.JFormattedTextField jFormattedTextField1;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JScrollPane jScrollPane1;
    private com.toedter.components.JSpinField jSpinField1;
    private javax.swing.JTable table;
    private javax.swing.JTextField txtHoraF;
    private javax.swing.JTextField txtHoraI;
    // End of variables declaration//GEN-END:variables

}
