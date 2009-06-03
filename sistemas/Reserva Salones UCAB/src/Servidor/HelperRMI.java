/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package Servidor;

import java.rmi.Naming;
/**
 *
 * @author Alejandro
 */
public class HelperRMI
{
    public static void main(String[] args)
    {
        try
        {
            ImplementorRMI irmi = new ImplementorRMI();
            Naming.rebind("reserva", irmi);

            System.out.println("Objeto enlazado");
        }
        catch (Exception e)
        {
            e.printStackTrace();
        }
    }
}
