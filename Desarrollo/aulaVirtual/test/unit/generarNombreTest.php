<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once dirname(__FILE__).'/../bootstrap/unit.php';
$t = new lime_test(1, new lime_output_color());

$contador = 0;
$nombre = 'DORY';
$apellido = 'VAZQUEZ';
//$prueba = new Persona();
//$prueba->generarNombre(0, 'uno', 'dos');

//$t->is(Persona:generarNombre($contador,$nombre,$apellido), 'DORY_VAZQUEZ_1');
$t->is(Persona::generarNombre(0, 'NO', 'FUNCIONA'),'NO_FUNCIONA');
//$t->is(Persona:generarNombre(0, 'uno', 'dos'),'UNO_DOS');
//$t->pass('This test always passes');

?>