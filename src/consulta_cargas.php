<?php
require '../includes/app.php';
//proteger la pagina permitiendo solamente ingresar a usuarios registratados
estaAutenticado();

incluirTemplate('header_gcSys');
incluirTemplate('sidebar');
incluirTemplate('navBar');

use App\Cargas;

$idUsuario = $_SESSION['id'];
//llamar al metodos de consulta
$cargas = Cargas::all($idUsuario);



?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Hola <?php echo $_SESSION['nombre']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <i class="fa-solid fa-list"></i>
            Aquí están todos tus registros.
        </h6>
        <p class="card-text">Puedes revisar, todos los estados de tus compras y agregar instrucciones.</p>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">TRACKING</th>
                    <th scope="col">TIENDA</th>
                    <th scope="col">DETALLE</th>
                    <th scope="col">VALOR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($cargas as $carga): ?>
                    <tr>
                        <td>
                            <?php echo $carga -> tracking;?>
                        </td>
                        <td>
                            <?php echo $carga -> origen;?>
                        </td>
                        <td>
                            <?php echo $carga -> detalle;?>
                        </td>
                        <td>
                            <?php echo $carga -> valorTotal;?>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div>
<?php
    incluirTemplate('footer');
    incluirTemplate('menuScroll');
    incluirTemplate('scripts');
?>