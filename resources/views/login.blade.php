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
                                <form action="login" class="form" role="form" id="login" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" class="form-control form-control-lg rounded-0  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" >
                                        <strong class="invalid-feedback">{{ $errors->first('email') }}</strong>
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control form-control-lg rounded-0  {{ $errors->has('password') ? 'is-invalid' : ''}}" name="password"  id="password" >
                                        <strong class="invalid-feedback">{{ $errors->first('password') }}</strong>
                                    </div>
                                    <input type="button" onclick="hola()" value="alerta">
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
    <script>

            $(document).ready(function() {
               $('#login').validate({
                   rules:{
                       email:{
                           required:true,
                           email:true,
                           minlenght:3
                       },
                       password:{
                        required:true,
                           minlenght:3
                       }
                   },
                   messages:{
                       email:{
                           required:'el email es requerido.',
                           email:'el campo debe contener un formato tipo email'
                       },
                       password:{
                           required:'la contraseña es requerida'
                       },
                   },
               });
            });
        </script>
</body>
</html>
