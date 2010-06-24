<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once dirname(__FILE__).'/../bootstrap/unit.php';
$t = new lime_test(1, new lime_output_color());

$pregunta = 'Pregunta 3';

$t->is(Respuesta::validarRespuesta('Pregunta 1'), 0);
//$t->is(Respuesta::validarRespuesta($pregunta), 1);
//$t->pass('This test always passes');

?>