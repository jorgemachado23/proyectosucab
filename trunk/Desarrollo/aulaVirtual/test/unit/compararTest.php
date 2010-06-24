<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once dirname(__FILE__).'/../bootstrap/unit.php';
$t = new lime_test(5, new lime_output_color());

$t->is(Nota::comparar('A'), 5);
$t->is(Nota::comparar('B'), 4);
$t->is(Nota::comparar('C'), 3);
$t->is(Nota::comparar('D'), 2);
$t->is(Nota::comparar('E'), 1);

?>
