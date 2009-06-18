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
                    Rey rey = new Rey();
                    rey.setColor("blanco");
                    //rey.setEstado(true);
                    matriz[i][j] = rey;
                }
                if (i == 0 && j ==4)
                {
                    Dama dama = new Dama();
                    dama.setColor("blanco");
                    //dama.setEstado(true);
                    matriz[i][j] = dama;
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
                    Rey rey = new Rey();
                    rey.setColor("negro");
                    //rey.setEstado(true);
                    matriz[i][j] = rey;
                }
                if (i == 7 && j ==4)
                {
                    Dama dama = new Dama();
                    dama.setColor("negro");
                    //dama.setEstado(true);
                    matriz[i][j] = dama;
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
            numero=7;
            x = true;
        }
        else if(columna.toUpperCase().equals("B"))
        {
            numero=6;
            x = true;
        }
        else if(columna.toUpperCase().equals("C"))
        {
            numero=5;
            x = true;
        }
        else if(columna.toUpperCase().equals("D"))
        {
            numero=4;
            x = true;
        }
        else if(columna.toUpperCase().equals("E"))
        {
            numero=3;
            x = true;
        }
        else if(columna.toUpperCase().equals("F"))
        {
            numero=2;
            x = true;
        }
        else if(columna.toUpperCase().equals("G"))
        {
            numero=1;
            x = true;
        }
        else if(columna.toUpperCase().equals("H"))
        {
            numero=0;
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
        System.out.print("          _______________________________________________________________________________");
        System.out.println();
        for (int i=7; i>-1;i--)
        {
            if (i == 0)
            {
                System.out.print("         |*********|         |*********|         |*********|         |*********|         |");
                System.out.println();
                System.out.print("     1   |");
            }
            else if (i == 1)
            {
                System.out.print("         |         |*********|         |*********|         |*********|         |*********|");
                System.out.println();
                System.out.print("     2   |");
            }
            else if (i == 2)
            {
                System.out.print("         |*********|         |*********|         |*********|         |*********|         |");
                System.out.println();
                System.out.print("     3   |");
            }
            else if (i == 3)
            {
                System.out.print("         |         |*********|         |*********|         |*********|         |*********|");
                System.out.println();
                System.out.print("     4   |");
            }
            else if (i == 4)
            {
                System.out.print("         |*********|         |*********|         |*********|         |*********|         |");
                System.out.println();
                System.out.print("     5   |");
            }
            else if (i == 5)
            {
                System.out.print("         |         |*********|         |*********|         |*********|         |*********|");
                System.out.println();
                System.out.print("     6   |");
            }
            else if (i == 6)
            {
                System.out.print("         |*********|         |*********|         |*********|         |*********|         |");
                System.out.println();
                System.out.print("     7   |");
            }
            else if (i == 7)
            {
                System.out.print("         |         |*********|         |*********|         |*********|         |*********|");
                System.out.println();
                System.out.print("     8   |");
            }
            for (int j=7; j>-1;j--)
            {
                if (matriz[i][j] != null)
                {
                    if ((i % 2 == 0 && j % 2 == 0) || (i % 2 != 0 && j % 2 != 0))
                    {
                        System.out.print("    "+matriz[i][j].getClass().getSimpleName().substring(0, 1)+matriz[i][j].getColor().substring(0, 1).toUpperCase()+"   |");
                        if (j == 0)
                        {
                            System.out.println("\n         |_________|_________|_________|_________|_________|_________|_________|_________|");
                        }
                    }
                    else
                    {
                        System.out.print("****"+matriz[i][j].getClass().getSimpleName().substring(0, 1)+matriz[i][j].getColor().substring(0, 1).toUpperCase()+"***|");
                        if (j == 0)
                        {
                            System.out.println("\n         |_________|_________|_________|_________|_________|_________|_________|_________|");
                        }
                    }
                }
                else
                {
                    if ((i % 2 == 0 && j % 2 == 0) || (i % 2 != 0 && j % 2 != 0))
                    {
                        System.out.print("         |");
                        if (j == 0)
                        {
                            System.out.println("\n         |_________|_________|_________|_________|_________|_________|_________|_________|");
                        }
                    }
                    else
                    {
                        System.out.print("*********|");
                        if (j == 0)
                        {
                            System.out.println("\n         |_________|_________|_________|_________|_________|_________|_________|_________|");
                        }
                    }
                }              
            }
        }
        System.out.println();
        System.out.print("              A         B         C         D         E         F         G         H");
        System.out.println();
        System.out.println();
    }
    public  Pieza [][] jugar (String posicioninicial,String posicionfinal,Pieza [][] matriz)
    {

        boolean juegaRey = false;
        int [] inicial = this.Posicion(posicioninicial);
        int [] terminal = this.Posicion(posicionfinal);
           String nombrePieza = matriz[inicial[0]][inicial[1]].getClass().getSimpleName();

           if (juegaRey == false)//valido que la pieza que se vaya jugar no se el rey
           {
               if (nombrePieza.equals("Peon"))
               {
                   Peon peon = new Peon();

                   String color = matriz[inicial[0]][inicial[1]].getColor();

                   //matriz = peon.MoverComer(matriz,inicial,terminal);

                   Rey reyAtaque = new Rey();

                   Rey reyAtacado = new Rey();

                   int[] posicion1 = reyAtaque.getPosicion(color, matriz);

                   int[] posicion2 = new int[2];

                   if (!reyAtaque.JaqueMate(posicion1, matriz)) //si el rey del equipo que ataca
                   {                                                         //no esta en jaque entonces mueve
                        matriz = peon.MoverComer(matriz,inicial,terminal);  //la pieza

                        if (color.equals("blanco"))
                        {
                            posicion2 = reyAtacado.getPosicion("negro", matriz); //posicion del rey atacado
                        }
                        else
                        {
                            posicion2 = reyAtacado.getPosicion("blanco", matriz);//posicion del rey atacado
                        }

                        if (reyAtacado.JaqueMate(posicion2, matriz))//si el rey atacado esta en jaque
                        {                                                        //el siguiente movimiento tiene que
                            juegaRey = true;                                    //obligar a jugar el rey
                        }
                        else
                        {
                            juegaRey = false;   //sino entonces puede jugarse cualquiera pieza
                        }

                   }
                   else
                   {
                            juegaRey = true;
                   }
               }
               if (nombrePieza.equals("Caballo"))
           {
                   Caballo caballo = new Caballo();

                   String color = matriz[inicial[0]][inicial[1]].getColor();

                   Rey reyAtaque = new Rey();

                   Rey reyAtacado = new Rey();

                   int[] posicion1 = reyAtaque.getPosicion(color, matriz);

                   int[] posicion2 = new int[2];

                   if (!reyAtaque.JaqueMate(posicion1, matriz)) //si el rey del equipo que ataca
                   {                                                         //no esta en jaque entonces mueve
                        matriz = caballo.MoverComer(matriz,inicial,terminal);  //la pieza

                        if (color.equals("blanco"))
                        {
                            posicion2 = reyAtacado.getPosicion("negro", matriz); //posicion del rey atacado
                        }
                        else
                        {
                            posicion2 = reyAtacado.getPosicion("blanco", matriz);//posicion del rey atacado
                        }

                        if (reyAtacado.JaqueMate(posicion2, matriz))//si el rey atacado esta en jaque
                        {                                                        //el siguiente movimiento tiene que
                            juegaRey = true;                                    //obligar a jugar el rey
                        }
                        else
                        {
                            juegaRey = false;   //sino entonces puede jugarse cualquiera pieza
                        }

                   }
                   else
                   {
                            juegaRey = true;
                   }

           }
           if (nombrePieza.equals("Alfil"))
           {
                   Alfil alfil = new Alfil();

                   String color = matriz[inicial[0]][inicial[1]].getColor();

                   Rey reyAtaque = new Rey();

                   Rey reyAtacado = new Rey();

                   int[] posicion1 = reyAtaque.getPosicion(color, matriz);

                   int[] posicion2 = new int[2];

                   if (!reyAtaque.JaqueMate(posicion1, matriz)) //si el rey del equipo que ataca
                   {                                                         //no esta en jaque entonces mueve
                        matriz = alfil.MoverComer(matriz,inicial,terminal);  //la pieza

                        if (color.equals("blanco"))
                        {
                            posicion2 = reyAtacado.getPosicion("negro", matriz); //posicion del rey atacado
                        }
                        else
                        {
                            posicion2 = reyAtacado.getPosicion("blanco", matriz);//posicion del rey atacado
                        }

                        if (reyAtacado.JaqueMate(posicion2, matriz))//si el rey atacado esta en jaque
                        {                                                        //el siguiente movimiento tiene que
                            juegaRey = true;                                    //obligar a jugar el rey
                        }
                        else
                        {
                            juegaRey = false;   //sino entonces puede jugarse cualquiera pieza
                        }

                   }
                   else
                   {
                            juegaRey = true;
                   }

           }
           if (nombrePieza.equals("Torre"))
           {
                   Torre torre = new Torre();

                   String color = matriz[inicial[0]][inicial[1]].getColor();

                   Rey reyAtaque = new Rey();

                   Rey reyAtacado = new Rey();

                   int[] posicion1 = reyAtaque.getPosicion(color, matriz);

                   int[] posicion2 = new int[2];

                   if (!reyAtaque.Jaque(posicion1[0], posicion1[1], matriz)) //si el rey del equipo que ataca
                   {                                                         //no esta en jaque entonces mueve
                        matriz = torre.MoverComer(matriz,inicial,terminal);  //la pieza

                        if (color.equals("blanco"))
                        {
                            posicion2 = reyAtacado.getPosicion("negro", matriz); //posicion del rey atacado
                        }
                        else
                        {
                            posicion2 = reyAtacado.getPosicion("blanco", matriz);//posicion del rey atacado
                        }

                        if (reyAtacado.JaqueMate(posicion2, matriz))//si el rey atacado esta en jaque
                        {                                                        //el siguiente movimiento tiene que
                            juegaRey = true;                                    //obligar a jugar el rey
                        }
                        else
                        {
                            juegaRey = false;   //sino entonces puede jugarse cualquiera pieza
                        }

                   }
                   else
                   {
                            juegaRey = true;
                   }

           }
           if (nombrePieza.equals("Dama"))
           {
                   Dama dama = new Dama();

                   String color = matriz[inicial[0]][inicial[1]].getColor();

                   Rey reyAtaque = new Rey();

                   Rey reyAtacado = new Rey();

                   int[] posicion1 = reyAtaque.getPosicion(color, matriz);

                   int[] posicion2 = new int[2];

                   if (!reyAtaque.Jaque(posicion1[0], posicion1[1], matriz)) //si el rey del equipo que ataca
                   {                                                         //no esta en jaque entonces mueve
                        matriz = dama.MoverComer(matriz,inicial,terminal);  //la pieza

                        if (color.equals("blanco"))
                        {
                            posicion2 = reyAtacado.getPosicion("negro", matriz); //posicion del rey atacado
                        }
                        else
                        {
                            posicion2 = reyAtacado.getPosicion("blanco", matriz);//posicion del rey atacado
                        }

                        if (reyAtacado.JaqueMate(posicion2, matriz))//si el rey atacado esta en jaque
                        {                                                        //el siguiente movimiento tiene que
                            juegaRey = true;                                    //obligar a jugar el rey
                        }
                        else
                        {
                            juegaRey = false;   //sino entonces puede jugarse cualquiera pieza
                        }

                   }
                   else
                   {
                            juegaRey = true;
                   }

                }
               if (nombrePieza.equals("Rey"))
                {
                    Rey rey = new Rey();
                    if (!rey.Jaque(terminal[0], terminal[1], matriz))
                    matriz = rey.MoverComer(matriz, inicial, terminal);
                }

            }
           else{

           if (nombrePieza.equals("Rey"))
           {
                    Rey rey = new Rey();
                    if (!rey.Jaque(terminal[0], terminal[1], matriz))
                    matriz = rey.MoverComer(matriz, inicial, terminal);
           }
           }
           this.ImprimirTablero(matriz);

           System.out.println();

        return matriz;
    }
}
