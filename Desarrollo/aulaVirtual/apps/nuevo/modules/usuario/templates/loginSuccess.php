<?php
$exist_user = false;
$cuenta =  strtoupper($_POST["usuario"]);
foreach ($persona_list as $persona)
{

    if ( ($cuenta == $persona->getCuenta()) and ($_POST["clave"] ==  $persona->getClave()) )
    {
        $_SESSION["usuario"] = strtoupper($_POST["usuario"]);
        $_SESSION["privilegio"] = $persona->getTipo();
        $exist_user = true;
        echo "<script language='JavaScript'>document.location.href='/frontend_dev.php/sesion'</script>";
    }
}
if ($exist_user == false)
{
	echo "<script language='JavaScript' type='text/JavaScript'>alert('El nombre de usuario o contraseña es inválido por favor intente de nuevo');</script>";
	echo "<script language='JavaScript'>document.location.href='/nuevo_dev.php/usuario';</script>";
}
?>
