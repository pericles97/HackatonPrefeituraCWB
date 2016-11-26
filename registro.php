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
            <form class="m-t" role="form" action="login.html">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Endereço" required="">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Número" required="">
                </div>

                <div class="form-group">
                <select name="uf" input type="" class="form-control" required="">
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
                    <input type="text" class="form-control" placeholder="Cidade" required="">
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" placeholder="Telefone" required="" pattern="[0-9]{10}">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                <select name="atuacao" input type="" class="form-control" required="">
                    <option value="Atuação">Area de atuação</option>
                    <option value="portugues">Portugues</option>
                    <option value="biologia">Biologia</option>
                    <option value="matematica">Matematica</option>
                    <option value="quimica">Quimica</option>
                </select>
                </div>
                </div>
                <div class="form-group">
                <select name="nivel" input type="" class="form-control" required="">
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
                    <input type="password" class="form-control" placeholder="Senha" required="">
                </div>
                <div>
                    <textarea name='sobremim'  rows="4" cols="39" id='sobre' placeholder="Fale um pouco sobre você."></textarea>
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Concordar com os termos e a política </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Registrar</button>

                <p class="text-muted text-center"><small>já tem uma conta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a>
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
