package Cliente;

import java.rmi.Naming;
import Servidor.InterfaceRMI;

class Encargado extends Cliente
{
    public static void main(String[] args) {
		try
        {
			InterfaceRMI h = (InterfaceRMI) Naming.lookup("rmi://localhost:1099/reserva");
		} catch (Exception e)
        {
			e.printStackTrace();
		}

	}
}
