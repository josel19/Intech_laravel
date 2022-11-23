<!doctype html>
<html lang="en">

<head>
    <title>Intech - Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('sources/styles/css/styles.css') }}">
    <link rel="shortcut icon" href="{{ asset('sources/files/images/logo_2.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

</head>

<body>

    <main>
        <div class="vhmax d-flex centrado">
            <div class="row  shadow-lg m-3 rounded login-frame">
                <div class="col-lg-6 col-md-6 d-none d-sm-flex bg-login rounded-start centrado">
                    <img src="{{ asset('sources/files/images/logo_1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 rounded-end">
                    <div class="row flex p-lg-5 p-md-2 p-sm-2  m-lg-5 m-md-2 m-sm-0"
                        style="padding-bottom: 0px !important">
                        <div class="col-12 mb-4">
                            <h3 class="text-center font-login">Ingreso Titular</h3>
                        </div>
                        <form action="">
                            <div class="col-12">
                                <div class="mb-4">
                                    <label class="fw-bold" for="user1">Usuario</label>
                                    <div class="input">
                                        <i class="fa-solid fa-user incon_input"></i>
                                        <input type="text" class="login_form" name="" id="user1"
                                            aria-describedby="helpId1" placeholder="Escribe un nombre de usuario"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-5">
                                    <label class="fw-bold">Contraseña</label>
                                    <div class="input">
                                        <i class="fa-solid fa-lock incon_input"></i>
                                        <input type="password" class="login_form" name="password" id="password"
                                            aria-describedby="helpId" placeholder="Escribe tu contraseña"  required>
                                        <button id="mostrar_contra" type="button" class="btn-hide" onclick="mostrar()">
                                            <i id="ver" class="fa-regular fa-eye p-2"></i>
                                            <i style="display: none" id="ocultar" class="fa-regular fa-eye-slash p-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-grid gap-2 shadow-sm mb-2">
                                    <button type="submit" name="" id=""
                                        class="btn-custom blue">Ingresar</button>
                                </div>
                            </div>
                        </form>
                        <div class="col-12">
                            <a href="" class="link_custom">
                                <p class="">Has olvidado tu contraseña?</p>
                            </a>
                        </div>
                        <div class="btn-registro flex-item-bottom" style="font-size: 12px; padding-top: 80px">
                            <p style="margin: 0px !important; padding: 2px 10px; color:#868686; font-size: 14px;">No
                                estas registrado?</p>
                            <button class="btn-custom-sm blue">Registrarse</button>
                        </div>
                    </div>
                </div>
            </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('sources/scripts/scripts.js') }}"></script>
</body>

</html>
