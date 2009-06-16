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
                if (tablero[i][j] !=null)
                {

                    if (tablero[i][j].getClass().getSimpleName().equalsIgnoreCase("rey") &&
                       tablero[i][j].getColor().equals(colorPieza))
                    {
                        posicionRey[0] = i;
                        posicionRey[1] = j;
                    }
                    
                }
            }
        }
        return posicionRey;
    }

    public boolean Jaque(int fila, int columna, Pieza[][] tablero)
    {
        boolean x = false;
        //int fila = posicionRey[0];
        //int columna = posicionRey[1];
        int i = fila;
        int j = columna;
        String colorPieza = tablero[fila][columna].getColor();

        if (colorPieza.equalsIgnoreCase("blanco"))
        {
            if (tablero[i + 1][j + 1] != null)
            {
                if ((tablero[i + 1][j + 1].getClass().getSimpleName().equalsIgnoreCase("peon")
                    && !tablero[i + 1][j + 1].getColor().equalsIgnoreCase(colorPieza)))
                {
                    x = true;
                    return x;
                }
            }
            if (tablero[i + 1][j - 1] != null)
            {
                if ((tablero[i + 1][j - 1].getClass().getSimpleName().equalsIgnoreCase("peon")
                    && !tablero[i + 1][j - 1].getColor().equalsIgnoreCase(colorPieza)))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (colorPieza.equalsIgnoreCase("negro"))
        {
            if (tablero[i - 1][j + 1] != null)
            {
                if ((tablero[i - 1][j + 1].getClass().getSimpleName().equalsIgnoreCase("peon")
                    && !tablero[i - 1][j + 1].getColor().equalsIgnoreCase(colorPieza)))
                {
                    x = true;
                    return x;
                }
            }
            if (tablero[i - 1][j - 1] != null)
            {
                if ((tablero[i - 1][j - 1].getClass().getSimpleName().equalsIgnoreCase("peon")
                    && !tablero[i - 1][j - 1].getColor().equalsIgnoreCase(colorPieza)))
                {
                    x = true;
                    return x;
                }
            }
        }
           
        for (i = fila + 1; i < 8; i++)
        {
            if (tablero[i][columna] != null && !tablero[i][columna].getColor().equalsIgnoreCase(colorPieza)
                && (tablero[i][columna].getClass().getSimpleName().equalsIgnoreCase("torre")
                || tablero[i][columna].getClass().getSimpleName().equalsIgnoreCase("dama")))
            {
                x = true;
                return x;
            }
        }
        for (i = fila + 1; i < 8; i++)
        {
            j++;
            if (j < 8)
            {
                if (tablero[i][j] != null && !tablero[i][j].getColor().equalsIgnoreCase(colorPieza)
                    && (tablero[i][j].getClass().getSimpleName().equalsIgnoreCase("alfil")
                    || tablero[i][j].getClass().getSimpleName().equalsIgnoreCase("dama")))
                {
                    x = true;
                    return x;
                }
            }
            if(j == 7)
            {
                i = 8;
            }
        }
        j = columna;
        for (i = fila - 1; i > -1; i--)
        {
            if (tablero[i][columna] != null && !tablero[i][columna].getColor().equalsIgnoreCase(colorPieza)
                && (tablero[i][columna].getClass().getSimpleName().equalsIgnoreCase("torre")
                || tablero[i][columna].getClass().getSimpleName().equalsIgnoreCase("dama")))
            {
                x = true;
                return x;
            }
        }
        for (i = fila - 1; i > -1; i--)
        {
            j--;
            if (j > 0)
            {
                if (tablero[i][j] != null && !tablero[i][j].getColor().equalsIgnoreCase(colorPieza)
                    && (tablero[i][j].getClass().getSimpleName().equalsIgnoreCase("alfil")
                    || tablero[i][j].getClass().getSimpleName().equalsIgnoreCase("dama")))
                {
                    x = true;
                    return x;
                }
            }
            if (j == 1)
            {
                i = -1;
            }
        }
        i = fila;
        for (j = columna + 1; j < 8; j++)
        {
            if (tablero[fila][j] != null && !tablero[fila][j].getColor().equalsIgnoreCase(colorPieza)
                && (tablero[fila][j].getClass().getSimpleName().equalsIgnoreCase("torre")
                || tablero[fila][j].getClass().getSimpleName().equalsIgnoreCase("dama")))
            {
                x = true;
                return x;
            }
        }
        for (j = columna + 1; j < 8; j++)
        {
            i--;
            if (i > 0)
            {
                if (tablero[i][j] != null && !tablero[i][j].getColor().equalsIgnoreCase(colorPieza)
                    && (tablero[i][j].getClass().getSimpleName().equalsIgnoreCase("alfil")
                    || tablero[i][j].getClass().getSimpleName().equalsIgnoreCase("dama")))
                {
                    x = true;
                    return x;
                }
            }
            if (i == -1)
            {
                j = 8;
            }
        }
        i = fila;
        for (j = columna - 1; j > -1; j--)
        {
            if (tablero[fila][j] != null && !tablero[fila][j].getColor().equalsIgnoreCase(colorPieza)
                && (tablero[fila][j].getClass().getSimpleName().equalsIgnoreCase("torre")
                || tablero[fila][j].getClass().getSimpleName().equalsIgnoreCase("dama")))
            {
                x = true;
                return x;
            }
        }
        for (j = columna - 1; j > -1; j--)
        {
            i++;
            if (i < 8)
            {
                if (tablero[i][j] != null && !tablero[i][j].getColor().equalsIgnoreCase(colorPieza)
                    && (tablero[i][j].getClass().getSimpleName().equalsIgnoreCase("alfil")
                    || tablero[i][j].getClass().getSimpleName().equalsIgnoreCase("dama")))
                {
                    x = true;
                    return x;
                }
            }
            if (i == 7)
            {
                j = -1;
            }
        }

        i = fila;
        j = columna;
        int i2;
        int j2;
        if (i == 0 && j > 1 && j < 6)
        {
            if (tablero[i2 = i + 1][j2 = j + 2] != null || tablero[i2 = i + 1][j2 = j - 2] != null
                || tablero[i2 = i + 2][j2 = j + 1] != null || tablero[i2 = i + 2][j2 = j - 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (i == 7 && j > 1 && j < 6)
        {
            if (tablero[i2 = i - 1][j2 = j + 2] != null || tablero[i2 = i - 1][j2 = j - 2] != null
                || tablero[i2 = i - 2][j2 = j + 1] != null || tablero[i2 = i - 2][j2 = j - 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (i == 1 && j > 1 && j < 6)
        {
            if (tablero[i2 = i + 1][j2 = j + 2] != null || tablero[i2 = i + 1][j2 = j - 2] != null
                || tablero[i2 = i + 2][j2 = j + 1] != null || tablero[i2 = i + 2][j2 = j - 1] != null
                || tablero[i2 = i - 1][j2 = j + 2] != null || tablero[i2 = i - 1][j2 = j - 2] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (i == 6 && j > 1 && j < 6)
        {
            if (tablero[i2 = i - 1][j2 = j + 2] != null || tablero[i2 = i - 1][j2 = j - 2] != null
                || tablero[i2 = i - 2][j2 = j + 1] != null || tablero[i2 = i - 2][j2 = j - 1] != null
                || tablero[i2 = i + 1][j2 = j + 2] != null || tablero[i2 = i + 1][j2 = j - 2] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (j == 0 && i > 1 && i < 6)
        {
            if (tablero[i2 = i + 1][j2 = j + 2] != null || tablero[i2 = i - 1][j2 = j + 2] != null
                || tablero[i2 = i + 2][j2 = j + 1] != null || tablero[i2 = i - 2][j2 = j + 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (j == 7 && i > 1 && i < 6)
        {
            if (tablero[i2 = i + 1][j2 = j - 2] != null || tablero[i2 = i - 1][j2 = j - 2] != null
                || tablero[i2 = i + 2][j2 = j - 1] != null || tablero[i2 = i - 2][j2 = j - 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (j == 1 && i > 1 && i < 6)
        {
            if (tablero[i2 = i + 1][j2 = j + 2] != null || tablero[i2 = i - 1][j2 = j + 2] != null
                || tablero[i2 = i + 2][j2 = j + 1] != null || tablero[i2 = i - 2][j2 = j + 1] != null
                || tablero[i2 = i + 2][j2 = j - 1] != null || tablero[i2 = i - 2][j2 = j - 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (j == 6 && i > 1 && i < 6)
        {
            if (tablero[i2 = i + 1][j2 = j - 2] != null || tablero[i2 = i - 1][j2 = j - 2] != null
                || tablero[i2 = i + 2][j2 = j - 1] != null || tablero[i2 = i - 2][j2 = j - 1] != null
                || tablero[i2 = i + 2][j2 = j + 1] != null || tablero[i2 = i - 2][j2 = j - 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (i == 0 && j == 0)
        {
            if (tablero[i2 = i + 1][j2 = j + 2] != null || tablero[i2 = i + 2][j2 = j + 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (i == 0 && j == 7)
        {
            if (tablero[i2 = i + 1][j2 = j - 2] != null || tablero[i2 = i + 2][j2 = j - 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (i == 7 && j == 0)
        {
            if (tablero[i2 = i - 1][j2 = j + 2] != null || tablero[i2 = i - 2][j2 = j + 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (i == 7 && j == 7)
        {
            if (tablero[i2 = i - 1][j2 = j - 2] != null || tablero[i2 = i - 2][j2 = j - 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (i == 1 && j == 1)
        {
            if (tablero[i2 = i + 1][j2 = j + 2] != null || tablero[i2 = i + 2][j2 = j + 1] != null
                || tablero[i2 = i - 1][j2 = j + 2] != null || tablero[i2 = i + 2][j2 = j - 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (i == 1 && j == 6)
        {
            if (tablero[i2 = i + 1][j2 = j - 2] != null || tablero[i2 = i + 2][j2 = j - 1] != null
                || tablero[i2 = i - 1][j2 = j - 2] != null || tablero[i2 = i + 2][j2 = j + 1] != null)

            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (i == 6 && j == 1)
        {
            if (tablero[i2 = i + 1][j2 = j + 2] != null || tablero[i2 = i - 2][j2 = j + 1] != null
                || tablero[i2 = i - 1][j2 = j + 2] != null || tablero[i2 = i - 2][j2 = j - 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else if (i == 6 && j == 6)
        {
            if (tablero[i2 = i + 1][j2 = j - 2] != null || tablero[i2 = i - 2][j2 = j - 1] != null
                || tablero[i2 = i - 1][j2 = j - 2] != null || tablero[i2 = i - 2][j2 = j + 1] != null)
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        else
        {
            if ((tablero[i2 = i + 2][j2 = j + 1] != null) || (tablero[i2 = i + 2][j2 = j - 1] != null)
                || (tablero[i2 = i - 2][j2 = j + 1] != null) || (tablero[i2 = i - 2][j2 = j - 1] != null)
                || (tablero[i2 = i + 1][j2 = j + 2] != null) || (tablero[i2 = i + 1][j2 = j - 2] != null)
                || (tablero[i2 = i - 1][j2 = j + 2] != null) || (tablero[i2 = i - 1][j2 = j - 2] != null))
            {
                if (!tablero[i2][j2].getColor().equals(colorPieza)
                    && tablero[i2][j2].getClass().getSimpleName().equalsIgnoreCase("caballo"))
                {
                    x = true;
                    return x;
                }
            }
        }
        
        return x;
    }

    public boolean JaqueMate(int[] posicionRey, Pieza[][] tablero)
    {
        boolean x = false;
        int fila = posicionRey[0];
        int columna = posicionRey[1];
        String colorPieza = tablero[fila][columna].getColor();

        if (this.Jaque(fila, columna, tablero))
        {
            if ((this.Jaque(fila + 1, columna, tablero) || tablero[fila + 1][columna].getColor().equalsIgnoreCase(colorPieza))
                && (this.Jaque(fila + 1, columna + 1, tablero) || tablero[fila + 1][columna + 1].getColor().equalsIgnoreCase(colorPieza))
                && (this.Jaque(fila + 1, columna - 1, tablero) || tablero[fila + 1][columna - 1].getColor().equalsIgnoreCase(colorPieza))
                && (this.Jaque(fila - 1, columna, tablero) || tablero[fila - 1][columna].getColor().equalsIgnoreCase(colorPieza))
                && (this.Jaque(fila - 1, columna + 1, tablero) || tablero[fila - 1][columna + 1].getColor().equalsIgnoreCase(colorPieza))
                && (this.Jaque(fila - 1, columna - 1, tablero) || tablero[fila - 1][columna - 1].getColor().equalsIgnoreCase(colorPieza))
                && (this.Jaque(fila, columna + 1, tablero) || tablero[fila][columna + 1].getColor().equalsIgnoreCase(colorPieza))
                && (this.Jaque(fila, columna - 1, tablero) || tablero[fila][columna - 1].getColor().equalsIgnoreCase(colorPieza)))
            {
                x = true;
                return x;
            }
        }
        return x;
    }
}
