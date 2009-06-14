package ajedrez;

public class Caballo extends Pieza
{
    public Pieza [][] MoverComer(Pieza [][] tablero, int[] posicionInicial, int[] posicionFinal)
    {
        int posIF = posicionInicial[0];
        int posIC = posicionInicial[1];
        int posFF = posicionFinal[0];
        int posFC = posicionFinal[1];
        String colorPieza = tablero[posIF][posIC].getColor();
        try
        {
            if ((posIC + 1 == posFC && posIF + 2 == posFF) ||
                (posIC - 1 == posFC && posIF + 2 == posFF) ||
                (posIC + 1 == posFC && posIF - 2 == posFF) ||
                (posIC - 1 == posFC && posIF - 2 == posFF) ||
                (posIC + 2 == posFC && posIF + 1 == posFF) ||
                (posIC - 2 == posFC && posIF + 1 == posFF) ||
                (posIC + 2 == posFC && posIF - 1 == posFF) ||
                (posIC - 2 == posFC && posIF - 1 == posFF))
            {
                if (tablero[posFF][posFC] == null)
                {
                     tablero[posFF][posFC] = tablero[posIF][posIC];
                     tablero[posIF][posIC] = null;
                }
                else if ( (!tablero[posFF][posFC].getColor().equals(colorPieza))  )
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
        catch (Exception e)
        {
            System.out.println("Error!");
        }
        return tablero;
    }
}
