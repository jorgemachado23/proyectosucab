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

    public int[] getPosicion(String colorPieza, Pieza [][] tablero)
    {
        int[] posicionRey = new int[2];

        for (int i = 0; i < 8; i++)
        {
            for (int j = 0; j < 8; j++)
            {
                if (tablero[i][j].getClass().getSimpleName().equalsIgnoreCase("rey") &&
                   !tablero[i][j].getColor().equals("colorPieza"))
                {
                    posicionRey[0] = i;
                    posicionRey[1] = j;
                }
            }
        }
        return posicionRey;
    }

    public boolean Jaque(int[] posicionRey)
    {
        boolean x = false;
        return x;
    }

    public boolean JaqueMate()
    {
        boolean x = false;
        return x;
    }
}
