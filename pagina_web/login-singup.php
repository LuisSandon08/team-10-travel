<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Iniciar Sesión/ Registrarte</title>
    <link rel="icon" href="img/logo.png">

    <!-- js jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>
    <div class="container">


        <div class="forms-container">


            <div class="signin-signup">

                <form action="#" class="sign-in-form">
                    <h2 class="title">Iniciar Sesión</h2>

                    <div class="inputfield">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                        <input class="inputFormulario" type="text" name="usuario" id="" placeholder="Usuario" />
                    </div>


                    <div class="inputfield">
                        <i class="fas fa-lock"></i>
                        <input class="inputFormulario" type="password" name="password" id="" placeholder="Contraseña" />
                    </div>


                    <input type="submit" value="ENTRAR" class="btn solid" />
                    <p class="social-text">Iniciar Sesión con redes sociales</p>
                    <div class="social-media">

                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>


                <form class="formularioRegistro" action="" method="POST">

                    <h2 class="title">Registrate</h2>

                    <div class="inputfield">
                        <i class="fas fa-user"></i>
                        <input class="inputFormulario" type="text" name="nombres" id="" placeholder="Nombre" />
                    </div>

                    <div class="inputfield">
                        <i class="fas fa-user"></i>
                        <input class="inputFormulario" type="text" name="apellidos" id="" placeholder="Apellido" />
                    </div>

                    <div class="inputfield">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                        <input class="inputFormulario" type="text" name="usuario" id="" placeholder="Usuario" />
                    </div>

                    <div class="inputfield">
                        <i class="fas fa-envelope"></i>
                        <input class="inputFormulario" type="email" name="email" id="" placeholder="Email" />
                    </div>

                    <div class="inputfield">
                        <i class="fas fa-lock"></i>
                        <input class="inputFormulario" type="password" name="password" id="" placeholder="Contraseña" />
                    </div>

                    <div class="inputfield">
                        <i class="fas fa-lock"></i>
                        <input class="inputFormulario" type="password" name="confirmar_password" id="" placeholder="Confirmar Contraseña" />
                    </div>

                    <input type="submit" class="btn" value="Registrarte" />
                    <p class="social-text">regístrarse con redes sociales</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>

                        </a>
                    </div>

                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">

                    <h3>¿Nuevo Aqui?</h3>

                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, ex ratione. Aliquid!
                    </p>

                    <button class="btn transparent" id="sign-up-btn">
                        Registrate
                    </button>

                </div>


                <img src="img/logo.png" class="image" alt="" />

            </div>


            <div class="panel right-panel">
                <div class="content">
                    <h3>¿Ya tienes una Cuenta?</h3>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam ad deleniti.
                    </p>

                    <button class="btn transparent" id="sign-in-btn">
                        Iniciar Sesión
                    </button>
                </div>


                <img src="img/logo.png" class="image" alt="" />


            </div>


        </div>
    </div>

    <!-- JS -->

    <script src="javascripts/app.js"></script>
    <script src="javascripts/validate.js"></script>

</body>

</html>