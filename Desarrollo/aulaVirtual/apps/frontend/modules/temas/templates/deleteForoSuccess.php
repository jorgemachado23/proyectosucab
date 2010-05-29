<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<script language='JavaScript' type='text/JavaScript'>
    var resp = confirm('¿Está seguro de que desea borrar todo el contenido del Foro?');
    if(resp){
        document.location.href='borrarForo';
    }
    else{
        document.location.href='index';
    }

</script>
