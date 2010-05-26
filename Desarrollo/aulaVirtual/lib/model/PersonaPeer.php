<?php

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

   static public function getActiveEstudiantes()
    {
        $criteria = new Criteria();
        $criteria->add(self::ESTADO, 'Activo', Criteria::EQUAL);
        $criteria->addAscendingOrderByColumn(self::APELLIDO);
        return self::doSelect($criteria);
    }

    static public function getCantidadEstudiantes(){

        $criteria = new Criteria();
        $criteria->add(self::ESTADO, 'Activo', Criteria::EQUAL);
        return self::doSelect($criteria);
    }
}
