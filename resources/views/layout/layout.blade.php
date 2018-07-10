<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style>
    .bg-grey {
        background-color: #f6f6f6;
    }

     .jumbotron {
      background-color:darkturquoise;
      color: #fff;

  }

    </style>

</head>
<body>


    <nav class="navbar bg-info">
        <div class=" navbar-brand text-light">
          Julián
        </div>
        <form action="{{url('logout')}}" method="POST">
            @csrf
        <input type="submit" class="btn btn-outline-light" value="Cerrar sesion">
        </form>
        {{-- <a href="{{ url('logout') }}" class="btn btn-outline-light">Cerrar sesion</a> --}}
      </nav>
      <div class="container" style="margin-top:20px">
      @yield('content')
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
       $('#formularioAsesores').validate({
           rules:{
               codigo:{
                   required:true,
                   minlength:3,
                   number:true
               },
               nombre:{
                   required:true,
                   minlength:3,
                   string:true
               }
           },
           messages:{
            codigo:{
                   required:"El código debe ser obligatorio.",
                   minlength:"El minimo de caracteres debe ser 3.",
                   number:"el código solo debe contener números"
               },
            nombre:{
                   required:"el campo nombre debe ser obligatorio",
                   minlength:"El minimo de caracteres debe ser 3.",
                   string:"el nombre solo debe contener numeros"
               },
           },
       });
    });
    </script>


</body>
</html>
