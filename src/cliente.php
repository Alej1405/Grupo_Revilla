<?php
require '../includes/app.php';
incluirTemplate('header_gcSys');
use App\Cliente;

$errores = Cliente::getErrores();
//debuguear($errores);

if ($_SERVER['REQUEST_METHOD']=== 'POST' ){

    //instanciar clase
    $cliente = new Cliente($_POST);

    
    //validar
    $errores = $cliente -> validar();

    if(empty($errores)){
        //llamar a la funcion guardar
        $cliente -> guardar();
    }


    
}
?>

<body class="bg-gradient-primary">

    <script>
        swal("Hola bienvenido!", "Antes de iniciar por favor registrate", "success");
    </script>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">
                                    <img class="logo2" src="../img/logo_gcbox.png" alt="">
                                    Crea tu cuenta!
                                </h1>
                            </div>
                            <form class="user" method="POST" action="">
                                <?php foreach($errores as $error): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error; ?>
                                    </div> 
                                <?php endforeach;?>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input 
                                            type="text" 
                                            class="form-control form-control-user" 
                                            id="nombre"
                                            placeholder="Nombre o nombres"
                                            name="nombre"
                                            maxlength="150"
                                            require>
                                    </div>
                                    <div class="col-sm-6">
                                        <input 
                                            type="text" 
                                            class="form-control form-control-user" 
                                            id="apellido"
                                            placeholder="Apellido o apellidos"
                                            name="apellido"
                                            maxlength="150"
                                            require>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input 
                                            type="int" 
                                            class="form-control form-control-user" 
                                            id="cedula"
                                            placeholder="N??mero de c??dula"
                                            name="cedula"
                                            maxlength="10"
                                            require>
                                    </div>
                                    <div class="col-sm-6">
                                        <input 
                                            type="text" 
                                            class="form-control form-control-user" 
                                            id="provincia"
                                            placeholder="En qu?? provincia vives..?"
                                            name="provincia"
                                            maxlength="150">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input 
                                            type="text" 
                                            class="form-control form-control-user" 
                                            id="ciudad"
                                            placeholder="Cual es tu ciudad...?"
                                            name="ciudad"
                                            maxlength="150">
                                    </div>
                                    <div class="col-sm-6">
                                        <input 
                                            type="text" 
                                            class="form-control form-control-user" 
                                            id="referencia"
                                            placeholder="Mas o menos por que sector...?"
                                            name="referencia"
                                            maxlength="250">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-user" 
                                        id="direccion"
                                        placeholder="En que direccion entregamos tus cosas...?"
                                        name="direccion"
                                        maxlength="250">
                                </div>
                                <div class="form-group">
                                    <input 
                                        type="email" 
                                        class="form-control form-control-user" 
                                        id="correo"
                                        placeholder="D??janos tu correo.."
                                        name="correo"
                                        maxlength="250"
                                        require>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input 
                                            type="int" 
                                            class="form-control form-control-user"
                                            id="celular" 
                                            placeholder="Nos dejas tu numero de celular...?"
                                            name="celular"
                                            maxlength="10"
                                            require>
                                    </div>
                                    <div class="col-sm-6">
                                        <input 
                                            type="int" 
                                            class="form-control form-control-user"
                                            id="telefono" 
                                            placeholder="Tabi??n un telefono fijo..."
                                            name="telefono"
                                            maxlength="10">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input 
                                        type="text" 
                                        class="form-control form-control-user" 
                                        id="promocion"
                                        placeholder="Tienes alg??n codigo de promoci??n...?"
                                        name="promocion"
                                        maxlength="10">
                                </div>
                                <div class="form-group">
                                    <input 
                                        type="password" 
                                        class="form-control form-control-user" 
                                        id="pasword"
                                        placeholder="Crea una contrase??a segura. Solo numeros"
                                        name="pasword"
                                        maxlength="8"
                                        require>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">C??mo funciona?</a>
                                <a class="small" href="login.html"> Cuales son las politicas?</a>
                            </div>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Salir de aqui</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="p_final">
            En Gc-box tratamos de reducir al m??ximo el uso del papel, en nuestra plataforma podr??s encontrar toda la documentaci??n que necesitas. Tambi??n queremos reducir la huella de carbono, si quieres ser parte de esto pregunta por nuestra entrega ecol??gica. 
        </p>
    </div>

<?php
    incluirTemplate('scripts');
?>