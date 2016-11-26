<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TeachHub</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs">
                                        <strong class="font-bold">Matias de Abreu</strong>
                                    </span> <span class="text-muted text-xs block">Professor de Matematica<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="login.php">Sair</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            TH+
                        </div>
                    </li>
                    <li class="active">
                        <a href="index.php"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
                    </li>
                    <li>
                        <a href="perfil.php"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Perfil</span> </a>
                    </li>
                    <li>
                        <a href="arquivos.php"><i class="fa fa-file-archive-o"></i> <span class="nav-label">Arquivos</span> </a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="resultadosPesquisa.php">
                            <div class="form-group">
                                <input type="text" placeholder="Procurar" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
					</div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="login.php">
                                <i class="fa fa-sign-out"></i> Sair
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>