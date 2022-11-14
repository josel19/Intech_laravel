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
    <link rel="stylesheet" href="{{asset('sources/styles/css/styles.css')}}">
    <link rel="shortcut icon" href="{{ asset('sources/files/images/logo_2.png')}}" type="image/x-icon">

</head>

<body>

    <main>
        <div class="container-fluid d-flex justify-content-center">
            <div class="row shadow-lg m-3 rounded login-frame">
                <div class="col-6 bg-login rounded-start">
                    <img src="{{ asset('sources/files/images/logo_1.png')}}" class="img-fluid centrado" alt="">
                </div>
                <div class="col-6 rounded-end">
                    <div class="row p-lg-5 p-md-2 p-sm-2  m-lg-5 m-md-2 m-sm-0">
                        <div class="col-12 mb-5">
                            <h3 class="text-center font-login">Ingreso Titular</h3>
                        </div>
                        <form action="">
                            <div class="col-12">
                                <div class="mb-4">
                                    <label class="fw-bold" for="user1">Usuario</label>
                                    <input type="text" class="login_form" name="" id="user1" aria-describedby="helpId1"
                                        placeholder="Escribe un nombre de usuario">

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4">
                                    <label class="fw-bold">Contraseña</label>
                                    <input type="password" class="login_form" name="password" id="password"
                                        aria-describedby="helpId" placeholder="Escribe tu contraseña">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-grid gap-2 shadow-sm mb-2">
                                    <button type="submit" name="" id="" class="btn btn-primary">Button</button>
                                </div>
                            </div>¡
                        </form>
                        <div>
                            <a href="" class="link_custom">
                                <p class="">Has olvidado tu contraseña?</p>
                            </a>
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
    <script src="{{ asset('sources/scripts/scripts.js')}}"></script>
</body>

</html>