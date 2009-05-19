package ajedrez;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.IOException;

public class Main {

    public static void main(String[] args) {

       BufferedReader dato = new BufferedReader(new InputStreamReader(System.in) );
       BufferedReader dato2 = new BufferedReader(new InputStreamReader(System.in) );
       try{
           Tablero tablero = new Tablero();
           Pieza[][] matriz = new Pieza[8][8];

           matriz = tablero.InicializarTablero();

           System.out.print("posicion inicial");
           System.out.println();
           String posicioninicial = dato.readLine();
           System.out.print("posicion final");
           System.out.println();
           String posicionfinal = dato2.readLine();

           int [] inicial = tablero.Posicion(posicioninicial);
           int [] terminal = tablero.Posicion(posicionfinal);
           String nombrePieza = matriz[inicial[0]][inicial[1]].getClass().getSimpleName();
           
           if (nombrePieza.equals("Peon"))
           {
               Peon peon = new Peon();
               matriz = peon.MoverComer(matriz,inicial,terminal);
           }
           if (nombrePieza.equals("Reina"))
           {
              
           }
           //&& nombrePieza.equals("Peon")
           /*String objeto = null;
           objeto = matriz[inicial[0]][inicial[1]].getClass().getSimpleName();*/

           //System.out.println(matriz[inicial[0]][inicial[1]].getColor());
           //System.out.println(objeto);

           //System.out.println("tablero");
           //System.out.println();
           tablero.ImprimirTablero(matriz);

       }
       catch(Exception e)
       {
            System.out.println("Error!");
       }

    }

}
