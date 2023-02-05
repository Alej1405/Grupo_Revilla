<?php

// inicio de sesion en el sistema de gestion
// aun no se distingue entre que el cliente desea contratar 
// es necesario definir como hacer si agreagamos o separamos
require '../includes/app.php';
incluirTemplate('header_sis');

//conectar base de datos
conectarDB();
$db =conectarDB();

//verificar la informacion del formulario
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $correo = mysqli_real_escape_string($db, $_POST['correo'] );
    $pasword = mysqli_real_escape_string($db, $_POST['pasword'] );

    if(!$correo) {
        $errores[] = "No se que estas haciendo pero ese usuario está mal, jejejé";
    }
    if(!$pasword) {
        $errores[] = "La contraseña tambien está mal, asi no se puede...";
    }

    if(empty($errores)){
        //revisar si el usuario existe
        $query = "SELECT * FROM clientes_GR WHERE correo = '$correo' ";
        $resultado = mysqli_query($db, $query);
        
        if( $resultado ->num_rows){
            //revisar si el pasword es correcto
            $usuario = mysqli_fetch_assoc($resultado);
            
            if ($usuario['pasword'] === "$pasword"){
                //El usuario está autentiacado
                session_start();

                //pasar datos en la super global session 
                    $_SESSION['login'] = true;
                    $_SESSION['rol'] = $usuario['tipo'];
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['usuario'] = $usuario['correo1'];
                    $_SESSION['nombre'] = $usuario['nombre'];
                    $_SESSION['apellido'] = $usuario['apellido'];
                    $_SESSION['cliente'] = $usuario['cliente'];
                    $_SESSION['foto'] = $usuario['foto'];
                    $_SESSION['cedula'] = $usuario['cedula'];
                //direccionar al dashborad de la pagina
                    header('location: index.php ');
            }else{
                $errores[] = "usuario";
            }

        }
    }
}

?>
<body>

    <div class="login-card">
        <h2>Ingresar</h2>
        <h3>Ingresa tu usuario y clave</h3>
        <form action="" method="post" class="login-form">

                <?php if($errores): ?>
                    <script>
                        swal("Ey! algo esta mal", 
                            "Parece que tu contraseña o usuario esta mal, por favor intena una vez más.",
                            "error");
                    </script>
                <?php endif;?>

            

            <input type="text"
            placeholder="Correo"
            name="correo">

            <input type="password"
            placeholder="Clave"
            name="pasword">

            <a href="cliente.php">
                Registrar nuevo usuario.
            </a>
            <button type="submit">
                INGRESAR
            </button>
        </form>
    </div>

</body>