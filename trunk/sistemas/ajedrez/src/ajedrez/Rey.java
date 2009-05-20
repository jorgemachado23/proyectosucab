package ajedrez;

public class Rey extends Pieza
{
    //Logica para mover una pieza de tipo rey dado su posicion inicial y posible
    //posicion final
    public Pieza [][] MoverComer(Pieza [][] tablero, int[] posicionInicial, int[] posicionFinal)
    {
        //boolean x;
        int posIF = posicionInicial[0];
        int posIC = posicionInicial[1];
        int posFF = posicionFinal[0];
        int posFC = posicionFinal[1];
        String colorPieza = tablero[posIF][posIC].getColor();

        try
        {
            if ((Math.abs(posIF - posFF) != 1 && posIC == posFC) ||
                (Math.abs(posIC - posFC) != 1 && posIF == posFF) ||
                (Math.abs(posIF - posFF) != 1 && Math.abs(posIC - posFC) != 1))
            {
                if (!tablero[posIF][posIC].getColor().equals(colorPieza))
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
        catch(Exception e)
        {
            System.out.println("Error!");
        }
        return tablero;
    }

    public void Jaque()
    {

    }

    public void JaqueMate()
    {
        
    }
}
