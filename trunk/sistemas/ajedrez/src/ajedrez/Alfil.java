package ajedrez;

public class Alfil extends Pieza
{
    //Logica para mover una pieza de tipo alfil dado su posicion inicial y posible
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
            if (posIC != posFC && posIF != posFF)
            {
                x = BloqueoDiagonal(tablero, posicionInicial, posicionFinal);
                if (x)
                {
                    if (!tablero[posFF][posFC].getColor().equals(colorPieza))
                    {
                        tablero[posFF][posFC] = tablero[posIF][posIC];
                        tablero[posIF][posIC] = null;
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
