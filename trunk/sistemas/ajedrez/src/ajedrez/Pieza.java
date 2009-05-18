package ajedrez;


public abstract class Pieza {

   protected String color;
   //protected boolean estado;

   public void setColor(String color) {
        this.color = color;
    }

   /* public void setEstado(boolean estado) {
        this.estado = estado;
    }*/

   public String getColor() {
        return color;
    }

   /*public boolean isEstado() {
        return estado;
    }*/

    public Pieza() {
        this.color = null;
        //this.estado = false;
    }
   

public void MoverComer()
{

}

/*public void Comer()
{

}

public void ValidarEstado()
{

}*/

}
