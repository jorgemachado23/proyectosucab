package ajedrez;

public class Torre extends Pieza
{
    //Logica para mover una pieza de tipo torre dado su posicion inicial y posible
    //posicion final
    public Pieza [][] MoverComer(Pieza [][] tablero, int[] posicionInicial, int[] posicionFinal)
    {
        boolean x;
        int posIF = posicionInicial[0];
        int posIC = posicionInicial[1];
        int posFF = posicionFinal[0];
        int posFC = posicionFinal[1];
        String colorPieza = tablero[posIF][posIC].getColor();
        try
        {
            if (posIC == posFC && posIF != posFF)
            {
                x = BloqueoVertical(tablero, posicionInicial, posicionFinal);
                if (x)
                {
                    if(tablero[posFF][posFC] == null)
                    {
                            tablero[posFF][posFC] = tablero[posIF][posIC];
                            tablero[posIF][posIC] = null;

                    }else if (!tablero[posFF][posFC].getColor().equals(colorPieza))
                    {
                            tablero[posFF][posFC] = tablero[posIF][posIC];
                            tablero[posIF][posIC] = null;
                    }
                }
                else
                {
                    throw new Exception();
                }
            }
            else if (posIF == posFF && posIC != posFC)
            {
                x = BloqueoHorizontal(tablero, posicionInicial, posicionFinal);
                if (x)
                {
                    if(tablero[posFF][posFC] == null)
                    {
                            tablero[posFF][posFC] = tablero[posIF][posIC];
                            tablero[posIF][posIC] = null;

                    }else if (!tablero[posFF][posFC].getColor().equals(colorPieza))
                    {
                            tablero[posFF][posFC] = tablero[posIF][posIC];
                            tablero[posIF][posIC] = null;
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
        }
        catch(Exception e)
        {
            System.out.println("Error!");
        }
        return tablero;
    }

}
