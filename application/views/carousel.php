<div class="container-carousel">
	<h1 class="text-center h1 mt-3">Gerenciador de Imagens</h1>

	<h3 class="text-center h5 mt-3">Veja abaixo as três últimas imagens cadastradas</h3>

	<div class="row">
		<div class="col-md-10 mx-auto">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<?php if(!empty($imagens)){ foreach($imagens as $key => $value){ ?>
						<div class="carousel-item <?php if($key == 0){echo "active";} ?>">
							<img class="d-block w-100" src="<?= $imagens[$key]['endereco'] ?>" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<h3><?= $imagens[$key]['titulo'] ?></h3>
								<p><?= $imagens[$key]['descricao'] ?></p>
							</div>
						</div>
					<?php }} else { ?>
						<div class="carousel-item active">
							<img class="d-block w-100" src="imagens_bd/20171119011109.png" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<h3>Não há imagens cadastradas no momento!</h3>
								<p>Comece cadastrando algumas imagens</p>
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
</div>