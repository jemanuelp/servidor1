<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo','Proveedor de Internet')</title>

    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome cientos de iconos en una sola fuente accesibles via clases de css-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://bootswatch.com/readable/bootstrap.min.css" rel="stylesheet">
    {{--
    <link href="https://bootswatch.com/paper/bootstrap.min.css" rel="stylesheet">
    <link href="https://bootswatch.com/readable/bootstrap.min.css" rel="stylesheet">
    <link href="https://bootswatch.com/cerulean/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://bootswatch.com/cyborg/bootstrap.min.css" rel="stylesheet" type="text/css">
    --}}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        body {
            font-family: 'Raleway';
            margin-top: 25px;
        }

        .fa-btn {
            margin-right: 6px;
        }

        .table-text div {
            padding-top: 6px;
        }
        .Menu-izq{
            font-size: 30px;
            font-style: inherit;
            margin: 0px;
            padding: 0px;
            list-style: none;
        }
        .contacto{
            margin-top: 25px;
        }
        #contenido{padding: 10px 10px 10px 10px; text-indent: 15px; text-align: end}


    </style>

</head>
<body>
<div class="container"> <!-- containerMenu -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">WispJeBrun</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="/auth/register"><i class="fa fa-btn fa-heart"></i>Registrarse</a></li>
                        <li><a href="/auth/login"><i class="fa fa-btn fa-sign-in"></i>Iniciar Sesion</a></li>
                    @else
                        <li class="navbar-text"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}</li>
                        <li><a href="/auth/logout"><i class="fa fa-btn fa-sign-out"></i>Cerrar Sesion</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div><!-- /containerMenu -->
<div class="container">
    @if(session('status'))
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ session('status') }}</strong>
        </div>
    @endif
    @section('main')
        <table width="100%" border="0">
            <tr>
                <td width="160" valign="top" id="menu">
                    <h1>Menu</h1>
                        <ul class="Menu-izq">
                            <li><a href="/Series">Series</a></li>
                            <li><a href="/Peliculas">Peliculas</a></li>
                            <li><a href="/Series-Animadas">Series Animadas</a></li>
                            <li><a href="/Anime">Anime</a></li>
                        </ul>
                </td>
                <td valign="top" id="contenido">
                    <h1 class="contacto">Contacto</h1>
                    <p>Mensajes, Llamadas y Wpp:  3876-445091 , 3876-442689</p>
                    <p>Telefono: -------</p>
                </td>
            </tr>
        </table>

    @show
</div>
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
