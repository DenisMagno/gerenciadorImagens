<h1 class="text-center titulo h1 mt-4 mb-3">Gerenciador de Imagens</h1>
<hr>

<div class="container-carousel blue-grey lighten-5">
	<?php if(!empty($imagens)){ ?>
		<h6 class="text-center h6">Veja abaixo as três últimas imagens cadastradas</h6>

		<div class="row mb-5">
			<div class="col-md-8 mx-auto">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<?php foreach($imagens as $key => $value){ ?>
							<div class="carousel-item <?php if($key == 0){echo "active";} ?>">
								<img class="d-block w-100" src="<?= $imagens[$key]['endereco'] ?>" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<h3><?= $imagens[$key]['titulo'] ?></h3>
									<p><?= $imagens[$key]['descricao'] ?></p>
								</div>
							</div>
						<?php } ?>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	<?php } ?>
</div>