package ajedrez;
import java.io.BufferedReader;
import java.io.InputStreamReader;
//import java.io.IOException;

public class Main {

    @SuppressWarnings("static-access")
    public static void main(String[] args) {

       BufferedReader dato = new BufferedReader(new InputStreamReader(System.in) );
       BufferedReader dato2 = new BufferedReader(new InputStreamReader(System.in) );
       BufferedReader salir = new BufferedReader(new InputStreamReader(System.in) );
       try{

           Tablero tablero = new Tablero();
           Pieza[][] matriz = new Pieza[8][8];
           matriz = tablero.InicializarTablero();
           tablero.ImprimirTablero(matriz);
           Integer juego = 1;
           boolean juegaRey = false;
           //matriz[1][0] = null;
           while (juego!=0)
           {
           System.out.println("posicion inicial: (Ej. A2)");
           System.out.println();
           String posicioninicial = dato.readLine();
           System.out.println("posicion final: (Ej. A2)");
           System.out.println();
           String posicionfinal = dato2.readLine();

           int [] inicial = tablero.Posicion(posicioninicial);
           int [] terminal = tablero.Posicion(posicionfinal);
           boolean x = tablero.ValidarPosicion(inicial);
           boolean y = tablero.ValidarPosicion(terminal);

               if (!x || !y)
               {
                   throw new Exception();
               }
               else
               {
               matriz = tablero.jugar(posicioninicial, posicionfinal, matriz);
               }
           }

       }
       catch(Exception e)
       {
            System.out.println("Error!");
            e.printStackTrace();
       }

    }

}
