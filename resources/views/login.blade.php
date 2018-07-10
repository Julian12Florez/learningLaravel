<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-white mb-4">LOGIN</h2>
                <div class="row">
                    <div class="col-md-6 mx-auto">

                        <!-- form card login -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Iniciar Sesion</h3>
                            </div>
                            <div class="card-body">
                                <form action="login" class="form" role="form" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" class="form-control form-control-lg rounded-0" name="email" id="email" >
                                        <div class="invalid-feedback">El campo de usuario no debe estar vacío</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" id="password" name="password" >
                                        <div class="invalid-feedback">Ingrese la Contraseña</div>
                                    </div>
                                    <button type="submit" class="btn  btn-outline-info btn-xs float-right" id="btnLogin">Iniciar</button>
                                </form>
                            </div>
                            <!--/card-block-->
                        </div>
                        <!-- /form card login -->
                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>
    @include('sweetalert::cdn')
    @include('sweetalert::view')
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
