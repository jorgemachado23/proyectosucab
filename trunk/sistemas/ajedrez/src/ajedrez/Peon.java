package ajedrez;

public class Peon extends Pieza{

    public void Coronar()
    {

    }

    
    //Logica para mover una pieza de tipo peon dado su posicion inicial y posible
    //posicion final
    public Pieza [][] Mover(Pieza [][] tablero,int[] posicionInicial, int[] posicionFinal)
    {
    int posIF = posicionInicial[0];
    int posIC = posicionInicial[1];
    int posFF = posicionFinal[0];
    int posFC = posicionFinal[1];
    String colorPieza = tablero[posIF][posIC].getColor();

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

        return tablero;
    }
}
