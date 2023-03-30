<?php
require '../includes/app.php';
//proteger la pagina permitiendo solamente ingresar a usuarios registratados
estaAutenticado();

incluirTemplate('header_gcSys');
incluirTemplate('sidebar');
incluirTemplate('navBar');

//utilizar la clase de cliente
use App\Cliente;

//crear el metodo de consulta general ojo solo es prueba

$clientes = Cliente::all();

?>

<?php
    incluirTemplate('footer');
    incluirTemplate('menuScroll');
    incluirTemplate('scripts');
?>