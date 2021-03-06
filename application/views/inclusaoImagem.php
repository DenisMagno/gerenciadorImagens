<div class="container-inclusao col-md-11 mx-auto mt-5 text-right">
	<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modalInclusao"><i class="fa fa-download" aria-hidden="true"></i> Incluir uma nova imagem</button>

	<?php if (isset($mensagem['erro'])){ ?>
		<div id="msg" class="col-md-12 alert alert-danger text-center mt-3" role="alert">
			<?= $mensagem['erro']?>
		</div>
	<?php } if (isset($mensagem['sucesso'])){ ?>
		<div id="msg" class="col-md-12 alert alert-success text-center mt-3" role="alert">
			<?= $mensagem['sucesso'] ?>
		</div>
	<?php }  ?>
	<!-- ModalInclusão -->
	<div class="modal fade" id="modalInclusao" tabindex="-1" role="dialog" aria-labelledby="modalInclusaoLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalInclusaoLabel">Inclusão de uma nova imagem</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form name="inclusao" method="POST" action="<?= base_url("imagem/incluirImagem")?>" enctype="multipart/form-data">
						<div class="md-form">
							<input type="text" name="titulo" id="inputTitulo" class="form-control" maxlength="30" required>
							<label for="inputTitulo">Título</label>
						</div>

						<div class="md-form">
							<input type="text" name="descricao" id="inputDescricao" class="form-control" maxlength="60" required>
							<label for="inputDescricao">Descrição</label>
						</div>

						<div class="form-group text-left">
							<label for="arquivoInput">Escolher foto a ser inserida</label>
							<input type="file" name="endereco" class="form-control-file form-control-sm" id="arquivoInput" required>
						</div>

						<button type="submit" class="btn btn-outline-primary" name="incluir">Incluir</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>