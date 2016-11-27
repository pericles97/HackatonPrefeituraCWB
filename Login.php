<?php
	session_start();
	require_once '_conexao.php';
	if (empty($_SESSION ['$email']))
	{
		if(!empty($_POST))
		{
			// Filtros
			$email = strtolower(trim(str_replace('%40','@',$_POST ['email'])));
			$senha = trim($_POST ['senha']);

			$usuario = $db -> query ("SELECT * FROM [dbo].[PROFESSOR] WHERE Email = '$email' AND Senha = '$senha'") -> fetch();

			if(!empty($usuario))
			{
				$_SESSION ['$email'] = $email;
				header('location: ../index.php');
			}
			else
			{
				echo '<script type="text/javascript">','alert(\'Usuario ou senha incorretos.\');','</script>';
			}
		}
	}
	else
	{
		header('location: ../index.php');
	}
?>

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

<body class="gray-bg">


    <div class="loginColumns animated fadeInDown">


        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Bem-vindo ao TeachHub</h2>

                <p>
                   A nova forma de compartilhar conhecimento.

                 <p> O TeachHub &egrave; uma plataforma educacional voltada ao ganho de aprendizado.</p>

                <p>
                    O objetivo &egrave; beneficiar docentes e institui&ccedil;&otilde;es ao desenvolvimento e capacita&ccedil;&atilde;o profissional e pessoal, onde os docentes ir&atilde;o compartilhar conte&uacute;dos, planos de aulas e novos modelos de conhecimento.
                    Reconhecimento profissional, networking e principalmente troca de ideias s&atilde;o os pilares fundamentais da plataforma.
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" method="post">
                        <div class="form-group">
							<input type="email" class="form-control" placeholder="E-mail" required="" name="email" />
                        </div>
                        <div class="form-group">
							<input type="password" class="form-control" placeholder="Senha" required="" name="senha" />
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Entrar</button>
                        <a href="#">
                            <!--<small>Forgot password?</small>-->
                        </a>
                        <a href="registro.php">
                            <small>Professor, n&atilde;o tem uma conta? Fa&ccedil;a j&aacute;!</small>
                        </a>
                        <p class="text-muted text-center">
                            <!--<small>Do not have an account?</small>-->
                        </p>
                       <!-- <a class="btn btn-sm btn-white btn-block" href="registro.php">Create an account</a>-->
                    </form>
                    <p class="m-t">
                        <!--<small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>-->
                    </p>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
           <!-- <div class="col-md-6">
                Copyright Example Company
            </div>-->
            <div class="col-md-6 text-right">
                <small>TeachHub 2016</small>
            </div>
        </div>
    </div>
</body>
</html>