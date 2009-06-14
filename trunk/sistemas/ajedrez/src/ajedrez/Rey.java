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
            if ((Math.abs(posIF - posFF) == 1 && posIC == posFC) ||
                (Math.abs(posIC - posFC) == 1 && posIF == posFF) ||
                (Math.abs(posIF - posFF) == 1 && Math.abs(posIC - posFC) == 1))
            {
                if (tablero[posFF][posFC] == null || !tablero[posIF][posIC].getColor().equals(colorPieza))
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

    public boolean Jaque(int[] posicionRey, Pieza[][] tablero)
    {
        boolean x = false;
        int fila = posicionRey[0];
        int columna = posicionRey[1];
        int i = fila;
        int j = columna;
        String colorPieza = tablero[fila][columna].getColor();

        for (i = fila + 1; i < 8; i++)
        {
            if (tablero[i][columna] != null && !tablero[i][columna].getColor().equalsIgnoreCase(colorPieza))
            {
                x = true;
                return x;
            }
            j++;
            if (tablero[i][j] != null && !tablero[i][j].getColor().equalsIgnoreCase(colorPieza))
            {
                x = true;
                return x;
            }
        }
        j = columna;
        for (i = fila - 1; i > -1; i--)
        {
            if (tablero[i][columna] != null && !tablero[i][columna].getColor().equalsIgnoreCase(colorPieza))
            {
                x = true;
                return x;
            }
            j--;
            if (tablero[i][j] != null && !tablero[i][j].getColor().equalsIgnoreCase(colorPieza))
            {
                x = true;
                return x;
            }
        }
        i = fila;
        for (j = columna + 1; j < 8; j++)
        {
            if (tablero[fila][j] != null && !tablero[fila][j].getColor().equalsIgnoreCase(colorPieza))
            {
                x = true;
                return x;
            }
            i--;
            if (tablero[i][j] != null && !tablero[i][j].getColor().equalsIgnoreCase(colorPieza))
            {
                x = true;
                return x;
            }
        }
        i = fila;
        for (j = columna - 1; j > -1; j--)
        {
            if (tablero[fila][j] != null && !tablero[fila][j].getColor().equalsIgnoreCase(colorPieza))
            {
                x = true;
                return x;
            }
            i++;
            if (tablero[i][j] != null && !tablero[i][j].getColor().equalsIgnoreCase(colorPieza))
            {
                x = true;
                return x;
            }
        }
        i = fila;
        j = columna;
        int i2;
        int j2;
        if ((tablero[i2 = i + 2][j2 = j + 1] != null) || (tablero[i2 = i + 2][j2 = j - 1] != null) ||
            (tablero[i2 = i - 2][j2 = j + 1] != null) || (tablero[i2 = i - 2][j2 = j - 1] != null) ||
            (tablero[i2 = i + 1][j2 = j + 2] != null) || (tablero[i2 = i + 1][j2 = j - 2] != null) ||
            (tablero[i2 = i - 1][j2 = j + 2] != null) || (tablero[i2 = i - 1][j2 = j - 2] != null))
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza))
                {
                    x = true;
                    return x;
                }
            }
        return x;
    }

    public boolean JaqueMate(int[] posicionRey, Pieza[][] tablero)
    {
        boolean x = false;
        int fila = posicionRey[0];
        int columna = posicionRey[1];
        int[] jaqueRey = posicionRey;
       
        return x;
    }
}
