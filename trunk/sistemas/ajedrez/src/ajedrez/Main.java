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
                   String nombrePieza = matriz[inicial[0]][inicial[1]].getClass().getSimpleName();

                   if (juegaRey = false)//valido que la pieza que se vaya jugar no se el rey
                   {
                       if (nombrePieza.equals("Peon"))
                       {
                           Peon peon = new Peon();

                           matriz = peon.MoverComer(matriz,inicial,terminal);

                           String color = matriz[inicial[0]][inicial[1]].getColor();

                           Rey reyAtaque = new Rey();

                           Rey reyAtacado = new Rey();

                           int[] posicion1 = reyAtaque.getPosicion(color, matriz);

                           int[] posicion2 = new int[2];

                           if (!reyAtaque.Jaque(posicion1[0], posicion1[1], matriz)) //si el rey del equipo que ataca
                           {                                                         //no esta en jaque entonces mueve
                                matriz = peon.MoverComer(matriz,inicial,terminal);  //la pieza

                                if (color.equals("blanco"))
                                {
                                    posicion2 = reyAtacado.getPosicion("negro", matriz); //posicion del rey atacado
                                }
                                else
                                {
                                    posicion2 = reyAtacado.getPosicion("blanco", matriz);//posicion del rey atacado
                                }

                                if (reyAtacado.Jaque(posicion2[0], posicion2[1], matriz))//si el rey atacado esta en jaque
                                {                                                        //el siguiente movimiento tiene que
                                    juegaRey = true;                                    //obligar a jugar el rey
                                }
                                else
                                {
                                    juegaRey = false;   //sino entonces puede jugarse cualquiera pieza
                                }

                           }
                       }
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
                        if (!rey.Jaque(terminal[0], terminal[1], matriz))
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
