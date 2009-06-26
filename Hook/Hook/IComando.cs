using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Modelo.Hook
{
    public abstract class IComando
    {
        public IComando()
        {

        }

        public abstract int Hacer();
    }
}
