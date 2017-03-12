<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo','Proveedor de Internet')</title>

    <!–Llamamos al archivo CSS –>
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">

    <link href="/css/estilos.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <![endif]-->
</head>
<body class="fondo">
<div class="container"> <!-- containerMenu -->
    <nav id="contenedor" class="navbar navbar-transparent" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="nomempr" class="navbar-brand" href="/">WispJeBrun<span class='glyphicon glyphicon-signal'></span></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <a class="navbar-brand" href="/contenido/index">Peliculas</a>
                    <a class="navbar-brand" href="#">Series</a>
                    <a class="navbar-brand" href="#">Series Animadas</a>
                    <a class="navbar-brand" href="#">Anime</a>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a id="reg" href="/auth/register"><i class="fa fa-btn fa-heart"></i>Registrarse<span class='glyphicon glyphicon-open'></span></a></li>
                        <li><a id="sigin" href="/auth/login"><i class="fa fa-btn fa-sign-in"></i>Iniciar Sesion<span class='glyphicon glyphicon-user'></span></a></li>
                    @else
                        <li id="nombreu" class="navbar-text"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}</li>
                        <li><a id="closes" href="/auth/logout"><i class="fa fa-btn fa-sign-out"></i>Cerrar Sesion</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div><!-- /containerMenu -->

<table width="100%" border="0">
    <tr>
        <td valign="top" id="contenido">
            <h1 class="contacto">Contacto</h1>
            <p id="celular">Mensajes, Llamadas y Wpp:  3876-445091 , 3876-442689</p>
            <p id="fijo">Telefono: 381-4230930</p>
        </td>
    </tr>
</table>
<div class="container">
    @if(session('status'))
        <div class="alert alert-info">
 -i         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ session('status') }}</strong>
        </div>
    @endif
    @section('main')


    @show
</div>

<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
