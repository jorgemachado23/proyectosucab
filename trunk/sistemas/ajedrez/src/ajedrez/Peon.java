package ajedrez;
import java.math.*;

public class Peon extends Pieza{

    //Transforma el peon en cualquier otro tipo de pieza al llegar al otro lado del tablero
    public void Coronar()
    {

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
            
            if (Math.abs(posIF - posFF) == 1)
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
        }
        catch(Exception e)
        {
            System.out.println("Error!");
        }
        return tablero;
    }
}
