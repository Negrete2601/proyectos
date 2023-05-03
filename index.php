<?php
// Con esta sección hacemos el Controlador del Frontend
$modelo = 'Inicio';
$controller = 'usuario';
$control = 'Proyectos';
$contro = 'login';

//si no esta seleccionado nada
if(!isset($_REQUEST['z']) & !isset($_REQUEST['c']) & !isset($_REQUEST['p']) & !isset($_REQUEST['l']))
    {
        require_once 'View/header.php';
        require_once 'View/inicio.php';
        require_once 'View/footer.php';
    }    
//si le da click a MagicSoft
if(isset($_REQUEST['z']) & !isset($_REQUEST['c']) & !isset($_REQUEST['p']) & !isset($_REQUEST['l']))
    {
        require_once 'View/header.php';
        require_once 'View/inicio.php';
        require_once 'View/footer.php';
    }
$controller = 'usuario';

//si le da click a usuarios
if(isset($_REQUEST['c']) & !isset($_REQUEST['a']))
{
        require_once 'View/header.php';
        require_once 'View/usuario.php';
        require_once 'View/footer.php';  

}
if(isset($_REQUEST['p']) & !isset($_REQUEST['z']))
{
        require_once 'View/header.php';
        require_once 'View/proyectos.php';
        require_once 'View/footer.php';  

}
if(isset($_REQUEST['l']) & !isset($_REQUEST['z']))
{
        require_once 'View/header.php';
        require_once 'View/login.php';
        require_once 'View/footer.php'; 
}
if(isset($_REQUEST['c']) & isset($_REQUEST['a']))
{
        require_once 'View/header.php';
        require_once 'View/usuario-editar.php';
        require_once 'View/footer.php';  

}


?>
