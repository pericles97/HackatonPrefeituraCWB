<?php include('menu.php');?>

<div class="wrapper wrapper-content">
	<div class="row animated fadeInRight">
		<div class="col-md-4">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>TeachPerfil</h5>
				</div>
				<div>
					<div class="ibox-content no-padding border-left-right">
						<img alt="image" class="img-responsive" src="img/profile_big.jpg" />
					</div>
					<div class="ibox-content profile-content">
						<h4>
							<strong><?= $usuario['Nome'] . " ". $usuario['Sobrenome'] ?></strong>
						</h4>
						<p>
							<!--<i class="fa fa-map-marker"></i>Riviera State 32/106-->
						</p>
						<h5>
							<br />
							Um pouco sobre mim!
						</h5>
						<p>
                            <?= $usuario['FaleUmPoucoSobreVoce'] ?>
						</p>
						<!--<div class="row m-t-lg">
							<div class="col-md-4">
								<span class="bar">5,3,9,6,5,9,7,3,5,2</span>
								<h5>
									<strong>169</strong>Posts
								</h5>
							</div>
							<div class="col-md-4">
								<span class="line">5,3,9,6,5,9,7,3,5,2</span>
								<h5>
									<strong>28</strong>Following
								</h5>
							</div>
							<div class="col-md-4">
								<span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
								<h5>
									<strong>240</strong>Followers
								</h5>
							</div>
						</div>-->
						<div class="user-button">
							<div class="row">
								<div class="col-md-6">
									<button type="button" class="btn btn-primary btn-sm btn-block">
										<i class="fa fa-envelope"></i>Enviar Mensagem
									</button>
								</div>
								<div class="col-md-6">
									<!--<button type="button" class="btn btn-default btn-sm btn-block">
										<i class="fa fa-coffee"></i>Buy a coffee
									</button>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Posts</h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
						</a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-wrench"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li>
								<a href="#">Config option 1</a>
							</li>
							<li>
								<a href="#">Config option 2</a>
							</li>
						</ul>
						<a class="close-link">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="ibox-content">

					<div>
						<div class="feed-activity-list">

							<div class="feed-element">
								<a href="#" class="pull-left">
									<img alt="image" class="img-circle" src="img/a1.jpg" />
								</a>
								<div class="media-body ">
									<small class="pull-right text-navy">1m ago</small>
									<strong><?= $usuario['Nome'] . " ". $usuario['Sobrenome'] ?> </strong>gostou do material academico de
									<strong>Monica Silva</strong>.
									<br />
									<small class="text-muted">Hoje 4:21 pm - 12.06.2014</small>
									<div class="actions">
										<a class="btn btn-xs btn-white">
											<i class="fa fa-thumbs-up"></i>Curti
										</a>
										<a class="btn btn-xs btn-danger">
											<i class="fa fa-heart"></i>Amei
										</a>
									</div>
								</div>
							</div>

							<div class="feed-element">
								<a href="#" class="pull-left">
									<img alt="image" class="img-circle" src="img/profile.jpg" />
								</a>
								<div class="media-body ">
									<small class="pull-right">5m ago</small>
									<strong>Monica Silva </strong>postou um novo material academico.
									<br />
									<small class="text-muted">Hoje 5:60 pm - 12.06.2014</small>

								</div>
							</div>

							<div class="feed-element">
								<a href="#" class="pull-left">
									<img alt="image" class="img-circle" src="img/a2.jpg" />
								</a>
								<div class="media-body ">
									<small class="pull-right">2h ago</small>
									<strong>Marcos Rodrigues </strong> postou um novo material academico.
									<br />
									<small class="text-muted">Hoje 2:10 pm - 12.06.2014</small>
									<div class="well">
										Boa tarde, acabo de postar um novo material em meu repositorio TeachHub
										Quem estiver interessado em dar uma lida e me falar o que achou.
										Obrigado!!
									</div>
									<div class="pull-right">
										<a class="btn btn-xs btn-white">
											<i class="fa fa-thumbs-up"></i>Curti
										</a>
										<a class="btn btn-xs btn-white">
											<i class="fa fa-heart"></i>Amei
										</a>
										<a class="btn btn-xs btn-primary">
											<i class="fa fa-pencil"></i>Mensagem
										</a>
									</div>
								</div>
							</div>
							<div class="feed-element">
								<a href="#" class="pull-left">
									<img alt="image" class="img-circle" src="img/a3.jpg" />
								</a>
								<div class="media-body ">
									<small class="pull-right">2h ago</small>
									<strong>Janete Professora</strong>adicionou novas imagens no material de historia.
									<br />
									<small class="text-muted">2 days ago at 8:30am</small>
									<div class="photos">
										<a target="_blank" href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg">
											<img alt="image" class="feed-photo" src="img/p1.jpg" />
										</a>
										<a target="_blank" href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg">
											<img alt="image" class="feed-photo" src="img/p3.jpg" />
										</a>
									</div>
								</div>
							</div>
							<div class="feed-element">
								<a href="#" class="pull-left">
									<img alt="image" class="img-circle" src="img/a4.jpg" />
								</a>
								<div class="media-body ">
									<small class="pull-right text-navy">5h ago</small>
									<strong>Christian figueiredo </strong>gostou do material academico de
									<strong>Monica Silva</strong>.
									<br />
									<small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
									<div class="actions">
										<a class="btn btn-xs btn-white">
											<i class="fa fa-thumbs-up"></i>Curti
										</a>
										<a class="btn btn-xs btn-white">
											<i class="fa fa-heart"></i>Amei
										</a>
									</div>
								</div>
							</div>
							<!--<div class="feed-element">
								<!--<a href="#" class="pull-left">
									<img alt="image" class="img-circle" src="img/a5.jpg" />
								</a>
								<div class="media-body ">
									<small class="pull-right">2h ago</small>
									<!--<strong>Kim Smith</strong>posted message on
									<strong>Monica Smith</strong>site.
									<br />
									
									<small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
									<div class="well">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
									</div>
									<div class="pull-right">
										<a class="btn btn-xs btn-white">
											<i class="fa fa-thumbs-up"></i>Like
										</a>
									</div>
										-->
						</div>
					</div>
					<div class="feed-element">
						<a href="#" class="pull-left">
							<img alt="image" class="img-circle" src="img/profile.jpg" />
						</a>
						<div class="media-body ">
							<small class="pull-right">23h ago</small>
							<strong>Monica Silva </strong>gostou do material academico de
							<strong>Monica Silva</strong>.
							<br />
							<small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
						</div>
					</div>
					<div class="feed-element">
						<!--<a href="#" class="pull-left">
									<img alt="image" class="img-circle" src="img/a7.jpg" />
								</a>
								<!--<div class="media-body ">
									<small class="pull-right">46h ago</small>
									<strong>Mike Loreipsum</strong>started following
									<strong>Monica Smith</strong>.
									<br />
									<small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
								</div>-->
					</div>
				</div>

				<button class="btn btn-primary btn-block m">
					<i class="fa fa-arrow-down"></i>Veja Mais
				</button>

			</div>

		</div>
	</div>
</div>

<?php include('footer.php');?>