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
    // var_dump($_POST);

    $email = mysqli_real_escape_string($db, $_POST['email'] );
    $contrasena = mysqli_real_escape_string($db, $_POST['contrasena'] );

    if(!$email) {
        $errores[] = "No se que estas haciendo pero ese usuario está mal, jejejé";
    }
    if(!$contrasena) {
        $errores[] = "La contraseña tambien está mal, asi no se puede...";
    }

    if(empty($errores)){
        //revisar si el usuario existe
        $query = "SELECT * FROM usuario WHERE correo1 = '${email}' ";
        $resultado = mysqli_query($db, $query);
        
        if( $resultado->num_rows){
            //revisar si el pasword es correcto
            $usuario = mysqli_fetch_assoc($resultado);
            if ($usuario['cedula'] === $contrasena){
                
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
            <input type="text"
            placeholder="Correo"
            name="email">

            <input type="password"
            placeholder="Clave"
            name="">

            <a href="cliente.php">
                Registrar nuevo usuario.
            </a>
            <button type="submit">
                INGRESAR
            </button>
        </form>
    </div>
</body>