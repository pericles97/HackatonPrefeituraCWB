<?php include('menu.php');?>

<?php

$usuario = $db -> query ("SELECT * FROM [dbo].[PROFESSOR] WHERE Email = '$email'") -> fetch();
$idUsuario = $usuario['ID'];

if(isset($_FILES['fileUpload']))
{
	$email = $_SESSION ['$email'];
	$date = date("Y.m.d-H.i.s");
	$fileName = $_FILES['fileUpload']['name'];
	$dir = 'material_upload/'; //Diretório para uploads
	$nomeArquivoFisico = $dir.$usuario['Nome'].$date.$fileName;
	$pastaProfessor = $_POST['pastaProfessor'];

	date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
	move_uploaded_file($_FILES['fileUpload']['tmp_name'], $nomeArquivoFisico); //Faz upload

	if(!empty($pastaProfessor) && !empty($fileName))
	{
		$db -> exec ("INSERT INTO [dbo].[ARQUIVO] VALUES ('$fileName',$idUsuario,'$nomeArquivoFisico','$pastaProfessor')");
	}
}

$arquivos = $db -> query ("SELECT * FROM [dbo].[ARQUIVO] WHERE ID_Professor = $idUsuario") -> fetchAll();

?>

<div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-lg-3">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div class="file-manager">
						<h5>Mostrar:</h5>
						<a href="#" class="file-control active">Tudo</a>
						<a href="#" class="file-control">Documentos</a>
						<div class="hr-line-dashed"></div>


						<form action="#" method="POST" enctype="multipart/form-data">

							<input type="file" id="selectedFile" style="display: none;" name="fileUpload" />
							<input type="button" class="btn btn-block btn-info btn-file" value="Selecionar Arquivos" onclick="document.getElementById('selectedFile').click();" />
							<input type="text" placeholder="Nome da pasta" class="form-control" name="pastaProfessor" />
							<button class="btn btn-primary btn-block" type="submit">Enviar</button>

						</form>

						<div class="hr-line-dashed"></div>
						<h5>pastas</h5>
						<ul class="folder-list" style="padding: 0">
							<li>
								<a href="">
									<i class="fa fa-folder"></i>Biologia
								</a>
							</li>
							<li>
								<a href="">
									<i class="fa fa-folder"></i>Quimica
								</a>
							</li>
							<li>
								<a href="">
									<i class="fa fa-folder"></i>Fisica
								</a>
							</li>
							<li>
								<a href="">
									<i class="fa fa-folder"></i>Matematica
								</a>
								<a href="">
									<i class="fa fa-folder"></i>Artes
								</a>
							</li>
							<li>
								<a href="">
									<i class="fa fa-folder"></i>Portugês
								</a>
							</li>
						</ul>
						<h5 class="tag-title">Tags</h5>
						<ul class="tag-list" style="padding: 0">
							<li>
								<a href="">Ensino Médio</a>
							</li>
							<li>
								<a href="">Trabalho</a>
							</li>
							<li>
								<a href="">Casa</a>
							</li>
							<li>
								<a href="">Jovens</a>
							</li>
							<li>
								<a href="">Estudos</a>
							</li>
							<li>
								<a href="">Aprender</a>
							</li>
							<li>
								<a href="">Estudar</a>
							</li>
							<li>
								<a href="">Conhecer</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 animated fadeInRight">
			<div class="row">
				<div class="col-lg-12">

					<?php foreach ($arquivos as $arquivo): ?>

					<div class="file-box">
						<div class="file">
							<a href="<?=$arquivo['Caminho']?>">
								<span class="corner"></span>

								<div class="icon">
									<i class="fa fa-file"></i>
								</div>
								<div class="file-name">
									<?=$arquivo['Nome']?>
								</div>
							</a>
						</div>
					</div>

					<?php endforeach;?>

				</div>
			</div>
		</div>
	</div>
</div>


<?php include('footer.php');?>