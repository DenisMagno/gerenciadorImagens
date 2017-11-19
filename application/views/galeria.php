<div class="container-galeria col-md-11 mx-auto mt-5">
	<div class="row">
		<?php if(!empty($imagens)){ foreach($imagens as $key => $value){ ?>
			<figure class="col-md-4">
				<a data-toggle="modal" data-target="#modalImagem<?= $key ?>">
					<img class="img-thumbnail rounded imagem-galeria mx-auto d-block" alt="picture" src="<?= $imagens[$key]['endereco'] ?>">
				</a>
				<h5 class="titulo-galeria text-center my-3"><?= $imagens[$key]['titulo'] ?></h5>
				<p class="descricao-galeria text-justify my3"><?= $imagens[$key]['descricao'] ?></p>

				<!-- ModalImagem -->
				<div class="modal fade" id="modalImagem<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="modalImagem<?= $key ?>Label" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalImagem<?= $key ?>Label"><?= $imagens[$key]['titulo'] ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img alt="picture" width="100%" src="<?= $imagens[$key]['endereco'] ?>">
							</div>
						</div>
					</div>
				</div>

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEdicao<?= $key ?>"><i class="fa fa-edit" aria-hidden="true"></i> Editar</button>
				<!-- ModalEdição -->
				<div class="modal fade" id="modalEdicao<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="modalEdicao<?= $key ?>Label" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalEdicao<?= $key ?>Label">Edição da imagem "<?= $imagens[$key]['titulo'] ?>"</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body text-right">
								<form name="edicao" method="POST" action="<?= base_url("imagem/editarImagem")?>">
									<input type="hidden" name="id" value="<?= $imagens[$key]['id'] ?>">

									<div class="md-form">
										<input type="text" name="titulo" id="inputTitulo" class="form-control" maxlength="30" value="<?= $imagens[$key]['titulo'] ?>" required>
										<label for="inputTitulo">Título</label>
									</div>

									<div class="md-form">
										<input type="text" name="descricao" id="inputDescricao" class="form-control" maxlength="60" value="<?= $imagens[$key]['descricao'] ?>" required>
										<label for="inputDescricao">Descrição</label>
									</div>

									<button type="submit" class="btn btn-primary" name="incluir">Editar</button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#modalExclusao<?= $key ?>"><i class="fa fa-close" aria-hidden="true"></i> Excluir</button>
				<!-- ModalExclusão -->
				<div class="modal fade" id="modalExclusao<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="modalExclusao<?= $key ?>Label" aria-hidden="true">
					<div class="modal-dialog modal-lg text-center" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalExclusao<?= $key ?>Label">Exclusão</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<h5>Deseja realmente excluir a imagem "<?= $imagens[$key]['titulo'] ?>"?</h5>
							</div>
							<form name="exclusao" method="POST" action="<?= base_url("imagem/excluirImagem")?>">
								<input type="hidden" name="id" value="<?= $imagens[$key]['id'] ?>">

								<button type="submit" class="btn btn-success col-md-3" name="confirmar">Confirmar</button>
							</form>
							<button type="button" class="btn btn-danger col-md-3 mx-auto" name="cancelar" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
				</div>

			</figure>
		<?php }} else { ?>
			<div class="col-md-12 alert alert-danger text-center" role="alert">
				Não há imagens cadastradas no momento!
			</div>
		<?php } ?>
	</div>
</div>