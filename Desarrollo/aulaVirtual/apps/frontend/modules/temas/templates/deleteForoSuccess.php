<?php
/* 
 * En este archivo se hace instancia a un pop up para confirmar el borrado del
 * foro, luego se redirige a la pagina borrarForo para realizar dicha accion
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
