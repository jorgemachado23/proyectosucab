<?php

/*
 *  Clase que define los métodos estáticos utilizados para
 * obtener colecciones de objetos de tipo Persona.
 * Fue modificado para crear las funciones que llenan los distintos listbox
 * utilizados en el formulario. Adicionalmente se crearon las funciones que
 * determinan los objetos Criteria que describen las consultas que se realizan
 * a la base de datos.
 */

class PersonaPeer extends BasePersonaPeer
{
    static public $tipo = array(
        'ALUM' => 'Alumno',
        'ADMIN' => 'Administrador',
    );

   static public $seccion = array(
       'A' => 'A',
       'B' => 'B',
       'C' => 'C',
       'D' => 'D',

   );

   /*
    * Esta función selecciona a las personas que esten en la base de datos
    * cuyo atributo tipo se ALUM. Es decir, busca solo los alumnos.
    */
   static public function getEstudiantes()
    {
        $criteria = new Criteria();
        $criteria->add(self::TIPO, 'ALUM', Criteria::EQUAL);
        return self::doSelect($criteria);
        
    }

    /*
    * Esta función selecciona a las personas que esten en la base de datos
    * cuyo estado es Activo. Es decir, busca solo los personas que esten activas.
    */

   static public function getActiveEstudiantes()
    {
        $criteria = new Criteria();
        $criteria->add(self::ESTADO, 'Activo', Criteria::EQUAL);
        $criteria->addAscendingOrderByColumn(self::APELLIDO);
        return self::doSelect($criteria);
    }


}
