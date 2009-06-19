
package servidor;
//Clase necesaria para almacenar el nombre del cliente
//En nuestro caso la direccion IP
public class Jugador {

    public String nombre;

    public String color;

    public Jugador(String direccionIp, String color)
    {
        nombre = direccionIp;
        this.color = color;
    }


}
