package ajedrez;

public class Tablero {

    public Pieza[][] matriz = new Pieza[8][8];

    public Tablero()
    {

    }

    public Pieza [][] InicializarTablero()
    {
        for (int i = 0; i<8 ; i++)
        {
            for (int j = 0; j<8; j++)
            {
                if (i == 0 && j == 0)
                {
                    Torre torre = new Torre();
                    torre.setColor("blanco");
                    //torre.setEstado(true);
                    matriz[i][j] = torre;
                }
                if (i == 0 && j ==1)
                {
                    Caballo caballo = new Caballo();
                    caballo.setColor("blanco");
                    //caballo.setEstado(true);
                    matriz[i][j] = caballo;
                }
                if (i == 0 && j ==2)
                {
                    Alfil alfil = new Alfil();
                    alfil.setColor("blanco");
                    //alfil.setEstado(true);
                    matriz[i][j] = alfil;
                }
                if (i == 0 && j ==3)
                {
                    Reina reina = new Reina();
                    reina.setColor("blanco");
                    //reina.setEstado(true);
                    matriz[i][j] = reina;
                }
                if (i == 0 && j ==4)
                {
                    Rey rey = new Rey();
                    rey.setColor("blanco");
                    //rey.setEstado(true);
                    matriz[i][j] = rey;
                }
                if (i == 0 && j ==5)
                {
                    Alfil alfil = new Alfil();
                    alfil.setColor("blanco");
                    //alfil.setEstado(true);
                    matriz[i][j] = alfil;
                }
                if (i == 0 && j == 6)
                {
                    Caballo caballo = new Caballo();
                    caballo.setColor("blanco");
                    //caballo.setEstado(true);
                    matriz[i][j] = caballo;
                }
                if (i == 0 && j == 7)
                {
                    Torre torre = new Torre();
                    torre.setColor("blanco");
                    //torre.setEstado(true);
                    matriz[i][j] = torre;
                }
                if (i == 7 && j == 0)
                {
                    Torre torre = new Torre();
                    torre.setColor("negro");
                    //torre.setEstado(true);
                    matriz[i][j] = torre;
                }
                if (i == 7 && j ==1)
                {
                    Caballo caballo = new Caballo();
                    caballo.setColor("negro");
                    //caballo.setEstado(true);
                    matriz[i][j] = caballo;
                }
                if (i == 7 && j ==2)
                {
                    Alfil alfil = new Alfil();
                    alfil.setColor("negro");
                    //alfil.setEstado(true);
                    matriz[i][j] = alfil;
                }
                if (i == 7 && j ==3)
                {
                    Reina reina = new Reina();
                    reina.setColor("negro");
                    //reina.setEstado(true);
                    matriz[i][j] = reina;
                }
                if (i == 7 && j ==4)
                {
                    Rey rey = new Rey();
                    rey.setColor("negro");
                    //rey.setEstado(true);
                    matriz[i][j] = rey;
                }
                if (i == 7 && j ==5)
                {
                    Alfil alfil = new Alfil();
                    alfil.setColor("negro");
                    //alfil.setEstado(true);
                    matriz[i][j] = alfil;
                }
                if (i == 7 && j == 6)
                {
                    Caballo caballo = new Caballo();
                    caballo.setColor("negro");
                    //caballo.setEstado(true);
                    matriz[i][j] = caballo;
                }
                if (i == 7 && j == 7)
                {
                    Torre torre = new Torre();
                    torre.setColor("negro");
                    //torre.setEstado(true);
                    matriz[i][j] = torre;
                }
                if (i == 1)
                {
                    Peon peon = new Peon();
                    peon.setColor("blanco");
                    //peon.setEstado(true);
                    matriz[i][j] = peon;
                }
                if(i == 6)
                {
                    Peon peon = new Peon();
                    peon.setColor("negro");
                    //peon.setEstado(true);
                    matriz[i][j] = peon;
                }
            }
        }
        
        return matriz;

    }

    //Funcion que me devuelve la posicion adecuada para manejarla
    // en el tablero, recibe una posicion como "A1" y devuelve
    // la posicion en el tablero en este caso "0,0" en un arreglo
    // de entero donde cada posicion es el valor de la posicion en la matriz
    public int [] Posicion (String posicion)
    {
    int numero = 0;
    String columna = posicion.substring(0,1);
    String fila = posicion.substring(1);
    int [] arreglo = new int[2];
    boolean x = false;
    try
    {
        if (columna.toUpperCase().equals("A"))
        {
            numero=0;
            x = true;
        }
        else if(columna.toUpperCase().equals("B"))
        {
            numero=1;
            x = true;
        }
        else if(columna.toUpperCase().equals("C"))
        {
            numero=2;
            x = true;
        }
        else if(columna.toUpperCase().equals("D"))
        {
            numero=3;
            x = true;
        }
        else if(columna.toUpperCase().equals("E"))
        {
            numero=4;
            x = true;
        }
        else if(columna.toUpperCase().equals("F"))
        {
            numero=5;
            x = true;
        }
        else if(columna.toUpperCase().equals("G"))
        {
            numero=6;
            x = true;
        }
        else if(columna.toUpperCase().equals("H"))
        {
            numero=7;
            x = true;
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

    if (x)
    {
        arreglo[0]= Integer.parseInt(fila)-1;
        arreglo[1]= numero;
    }

    return arreglo;
    }

    public boolean ValidarPosicion(int [] posicion)
    {
        boolean x = false;
        try
            {
            for (int i = 0; i < 2; i++)
            {
                if (posicion[i] >= 0 || posicion[i] <= 7)
                {
                    x = true;
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

        return x;
    }
    //Si hay una pieza 
    

    public void ImprimirTablero(Pieza[][] matriz)
    {
        for (int i=0; i<matriz.length;i++)
        {
            for (int j=0; j<matriz.length;j++)
            {
                if (matriz[i][j] != null){

                    System.out.print(matriz[i][j].color+"/"+ matriz[i][j].getClass().getSimpleName()+" ");

                }
                else
                {
                    System.out.print(matriz[i][j]);
                }

                if (j==7)
                {
                System.out.println();
                }

            }

        }

    }
}