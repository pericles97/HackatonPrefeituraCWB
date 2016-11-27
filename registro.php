<?php
$Nome = strtoupper(trim(['Nome']));
$Sobrenome = strtoupper(trim(['Sobrenome']));
$Endereco = strtoupper(trim(['Endereco']));
$Numero = strtoupper(trim(['Numero']));
$Complemento = strtoupper(trim(['Complemento']));
$Estado = strtoupper(trim(['Estado']));
$Cidade = strtoupper(trim(['Cidade']));
$Telefone = strtoupper(trim(['Telefone']));
$Email = strtolower(trim(str_replace('%40','@',$_POST ['txtEmail'])));
$AreaAtuacao = strtoupper(trim(['AreaAtuacao']));
$Nivel = strtoupper(trim(['Nivel']));
$Senha = trim(['Senha']);
$SobreMim = strtoupper(trim(['SobreMim']));
$erros = [];


if(!empty($Nome) && !empty($Sobrenome) && !empty($Endereco) && !empty($Numero) && !empty($Estado) && !empty($Cidade) && !empty ($Telefone) && !empty ($Email) && !empty ($AreaAtuacao) && !empty ($Nivel) && !empty ($Senha) && !empty ($SobreMim)){
    require_once '_conexao.php';
    
    $duplicado = $db -> query ("select Email from professor where Email = '$email'") -> fetch();
    
    if ($duplicado['email'] == $email)
    {
        $erros [] = 'E-mail já cadastrado';
    }
    else
    {
        $db -> exec ("insert into eleitor
												(email,nome,senha,data_nascimento,id_bairro)
												values
												('$email','$nome', '$senha','$data_nascimento','$id_bairro')");
        
        $_SESSION ['$email'] = $email;
        
        header('location: index.php');
    }
    
}


?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">TH+</h1>

            </div>
            <h3>Registrar no TeatchHub+</h3>
            <p>Crie uma conta para vê-la em ação.</p>
            <form class="m-t" role="form" action="login.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome" required="" maxlength="40" name="Nome" value="$Nome">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Sobrenome" required="" maxlength="50" name="Sobrenome" value="$Sobrenome">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Endereço" required="" maxlength="50" name="Endereco" value="$endereco">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Numero" required=""  maxlength="10" name="Numero" value="$Numero">
                </div>

                 <div class="form-group">
                    <input type="text" class="form-control" placeholder="Complemento" maxlength="30" name="Complemento" value="$Complemento">
                </div>

                <div class="form-group">
                <select name="Estado" input type="" class="form-control" required="">
                        <option value = "AC" >AC</option>
                        <option value = "AL" >AL</option>
                        <option value = "AP" >AP</option>
                        <option value = "AM" >AM</option>
                        <option value = "BA" >BA</option>
                        <option value = "CE" >CE</option>
                        <option value = "DF" >DF</option>
                        <option value = "ES" >ES</option>
                        <option value = "GO" >GO</option>
                        <option value = "MA" >MA</option>
                        <option value = "MT" >MT</option>
                        <option value = "MS" >MS</option>
                        <option value = "MG" >MG</option>
                        <option value = "PR" >PR</option>
                        <option value = "PB" >PB</option>
                        <option value = "PA" >PA</option>
                        <option value = "PE" >PE</option>
                        <option value = "PI" >PI</option>
                        <option value = "RJ" >RJ</option>
                        <option value = "RN" >RN</option>
                        <option value = "RS" >RS</option>
                        <option value = "RO" >RO</option>
                        <option value = "RR" >RR</option>
                        <option value = "SC" >SC</option>
                        <option value = "SE" >SE</option>
                        <option value = "SP" >SP</option>
                        <option value = "TO" >TO</option>
                </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Cidade" required="" name="Cidade" value="$Cidade">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Telefone" required="" name="Telefone" value="$Telefone">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="" name="Email" value="$Email">
                </div>
                <div class="form-group">
                <select name="AreaAtuacao" input type="" class="form-control" required="">
                    <option value="Atuação">Area de atuação</option>
                    <option value="portugues">Portugues</option>
                    <option value="biologia">Biologia</option>
                    <option value="matematica">Matematica</option>
                    <option value="quimica">Quimica</option>
                </select>
                </div>
                </div>
                <div class="form-group">
                <select name="Nivel" input type="" class="form-control" required="">
                    <option value="nivel">Nível</option>
                    <option value="fundamental">Fundamental</option>
                    <option value="medio">Médio</option>
                    <option value="pos">Pós</option>
                    <option value="graduacao">Graduação</option>
                    <option value="mestrado">Mestrado</option>
                    <option value="doutorado">Doutorado</option>
                    <option value="posdoc">Pós Doc</option>
                </select>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Senha" required="" name="Senha">
                </div>
                <div>
                    <textarea name='Sobremim'  rows="4" cols="39" id='sobre' maxlength="255" value="$SobreMim" placeholder="Fale um pouco sobre você. Maxmimo 255 Caracteres."></textarea>
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input required="" type="checkbox"><i></i> Concordar com os termos e a política </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Registrar</button>

                <p class="text-muted text-center"><small>já tem uma conta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.php">Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
