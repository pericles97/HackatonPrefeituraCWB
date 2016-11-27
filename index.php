<?php include('menu.php');?>
<?php
	session_start();
	require_once '_conexao.php';
	$teste = $db -> query ("select * from PROFESSOR")-> fetch();

		echo $teste['Nome'];
 echo $teste['Sobrenome'];
 echo $teste['Endereco'];
 echo $teste['Estado'];
 echo $teste['Cidade'];
 echo $teste['Telefone'];
 echo $teste['Email'];
 echo $teste['AreaAtuacao'];
 echo $teste['Nivel'];
 echo $teste['Senha'];
 echo $teste['FaleUmPoucoSobreVoce'];
 echo "Teste conxcao";
	
?>

<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">
            <div class="text-center m-t-lg">
                <h1>
                    Bem Vindo ao TeachHub !
                </h1>
                <small>
                    Portal de compartilhamento de conteudo on-line para aulas.
                </small>
			</div>
			<div class="text-center m-t-lg">
				<img alt="image" class="img-circle" src="img/teach_hub_logo cortada.png" />
			</div>
		</div>
	</div>
</div>          

<?php include('footer.php');?>