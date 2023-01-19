<?php
require '../includes/app.php';

incluirTemplate('header_gcSys');
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
                                <h1 class="h4 text-gray-900 mb-4">Crea tu cuenta!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nombre"
                                            placeholder="Nombre o nombres">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Apellido o apellidos">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="int" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Número de cédula">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="En qué provincia vives..?">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Cual es tu ciudad...?">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Mas o menos por que sector...?">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="En que direccion entregamos tus cosas...?">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Déjanos tu correo..">
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="int" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Nos dejas tu numero de celular...?">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="int" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Tabién un telefono fijo...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Tienes algún codigo de promoción...?">
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Cómo funciona?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Cuales son las politicas? quiero conocer!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
    incluirTemplate('scripts');
?>