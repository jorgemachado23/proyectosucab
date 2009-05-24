package Cliente;
import java.sql.Date;

abstract class Cliente {
	protected String nombre;
	protected String apellido;
	protected String ci;
	protected String escDepFac;
	protected String usuario;
	protected String password;

	public boolean SolicitarSalon(Date horaInicio, Date horaFin, char Tipo)
    {
        boolean x = false;
        return x;
	}
	
	public boolean Login(String usuario, String password)
    {
        boolean x = false;
        return x;
	}
	
	public boolean Logout()
    {
        boolean x = false;
        return x;
	}
}
