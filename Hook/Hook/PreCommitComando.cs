using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
using Modelo.DAO.DAOs;

namespace Modelo.Hook
{
    public class PreCommitComando : IComando
    {
        public override int Hacer()
        {
            DAO_Usuario usuario = new DAO_Usuario();
            return 0;
        }
    }
}
