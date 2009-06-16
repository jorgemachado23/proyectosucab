package ajedrez;

import java.io.BufferedReader;
import java.io.InputStreamReader;


public class Peon extends Pieza{

    //Transforma el peon en cualquier otro tipo de pieza al llegar al otro lado del tablero
    public Pieza [][] Coronar(Pieza[][] tablero, int[] posicion)
    {
        try
        {
            int posF = posicion[0];
            int posC = posicion[1];
            String colorPieza = tablero[posF][posC].getColor();
            BufferedReader dato = new BufferedReader(new InputStreamReader(System.in) );

            System.out.println("Escoja el tipo de pieza ");
            System.out.println();
            String tipoPieza = dato.readLine();
            
            if (tipoPieza.equalsIgnoreCase("torre"))
            {
                Torre torre = new Torre();
                tablero[posF][posC] = torre;
                tablero[posF][posC].setColor(colorPieza);
            }
            else if (tipoPieza.equalsIgnoreCase("caballo"))
            {
                Caballo caballo = new Caballo();
                tablero[posF][posC] = caballo;
                tablero[posF][posC].setColor(colorPieza);
            }
            else if (tipoPieza.equalsIgnoreCase("alfil"))
            {
                Alfil alfil = new Alfil();
                tablero[posF][posC] = alfil;
                tablero[posF][posC].setColor(colorPieza);
            }
            else if (tipoPieza.equalsIgnoreCase("dama"))
            {
                Dama dama = new Dama();
                tablero[posF][posC] = dama;
                tablero[posF][posC].setColor(colorPieza);
            }
            else
            {
                throw new Exception();
            }
        }
        catch(Exception e)
        {
             System.out.println("Error!");
        }
        return tablero;
    }

    //Logica para mover una pieza de tipo peon dado su posicion inicial y posible
    //posicion final
    public Pieza [][] MoverComer(Pieza [][] tablero, int[] posicionInicial, int[] posicionFinal)
    {
        int posIF = posicionInicial[0];
        int posIC = posicionInicial[1];
        int posFF = posicionFinal[0];
        int posFC = posicionFinal[1];
        String colorPieza = tablero[posIF][posIC].getColor();
        try
        {
            if (colorPieza.equals("blanco") && posIF>posFF)
            {
                throw new Exception();
            }
            else if (colorPieza.equals("negro") && posIF<posFF)
            {
                throw new Exception();
            }
            else if (posIF == posFF)
            {
                throw new Exception();
            }

            if (posIF == 1 && colorPieza.equals("blanco"))
            {
                if ((posIF + 1 == posFF) && (posIC == posFC))
                {
                    tablero[posFF][posFC] = tablero[posIF][posIC];
                    tablero[posIF][posIC] = null;
                }
                else if ((posIF + 2 == posFF) && (posIC == posFC))
                {
                    tablero[posFF][posFC] = tablero[posIF][posIC];
                    tablero[posIF][posIC] = null;
                }
            }
            else if (posIF == 6 && colorPieza.equals("negro"))
            {
                if ((posIF - 1 == posFF) && (posIC == posFC))
                {
                    tablero[posFF][posFC] = tablero[posIF][posIC];
                    tablero[posIF][posIC] = null;
                }
                else if ((posIF - 2 == posFF) && (posIC == posFC))
                {
                    tablero[posFF][posFC] = tablero[posIF][posIC];
                    tablero[posIF][posIC] = null;
                }
            }
            else if (Math.abs(posIF - posFF) == 1)
            {
               if (posIC == posFC && tablero[posFF][posFC] == null)
               {
                    tablero[posFF][posFC] = tablero[posIF][posIC];
                    tablero[posIF][posIC] = null;
               }
               else if (((posIF < posFF && posIC < posFC) || (posIF < posFF && posIC > posFC)) && (Math.abs(posIF - posFF) == Math.abs(posIC - posFC)))
               {
                   if (tablero[posFF][posFC] != null && !(tablero[posFF][posFC].getColor().equals(tablero[posIF][posIC].getColor())))
                   {
                       tablero[posFF][posFC] = tablero[posIF][posFC];
                       tablero[posIF][posFC] = null;
                   }
                   else
                   {
                       throw new Exception();
                   }
               }
               else
               {
                   throw new Exception();
               }
            }
            else
            {
                throw new Exception();
            }
            
            if (posFF == 7 || posFF == 0)
            {
                Coronar(tablero, posicionFinal);
            }
        }
        catch(Exception e)
        {
            System.out.println("Error!");
        }
        return tablero;
    }
}
