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
           Integer juego = 1;
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
                   String nombrePieza = matriz[inicial[0]][inicial[1]].getClass().getSimpleName();

                   if (nombrePieza.equals("Peon"))
                   {
                       Peon peon = new Peon();
                       matriz = peon.MoverComer(matriz,inicial,terminal);
                   }
                   if (nombrePieza.equals("Caballo"))
                   {
                       Caballo caballo = new Caballo();
                       matriz = caballo.MoverComer(matriz, inicial, terminal);
                   }
                   if (nombrePieza.equals("Alfil"))
                   {
                        Alfil alfil = new Alfil();
                        matriz = alfil.MoverComer(matriz, inicial, terminal);
                   }
                   if (nombrePieza.equals("Torre"))
                   {
                        Torre torre = new Torre();
                        matriz = torre.MoverComer(matriz, inicial, terminal);
                   }
                   if (nombrePieza.equals("Reina"))
                   {
                       Reina reina = new Reina();
                       matriz = reina.MoverComer(matriz, inicial, terminal);
                   }
                   if (nombrePieza.equals("Rey"))
                   {
                        Rey rey = new Rey();
                        matriz = rey.MoverComer(matriz, inicial, terminal);
                   }

                   tablero.ImprimirTablero(matriz);
                   System.out.println();
                   System.out.println();
                   System.out.println("Para salir presione 0");
                   String salida = salir.readLine();
                   juego = juego.parseInt(salida);
                   System.out.println();
               }
           }


       }
       catch(Exception e)
       {
            System.out.println("Error!");
       }

    }

}
