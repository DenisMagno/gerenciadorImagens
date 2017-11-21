<?php
	include APPPATH . 'libraries/ImagemLib.php';

	class ImagemModel extends CI_Model{

		/*
		*	Obtem todas as imagems do banco de dados
		*
		*	@return array: imagens encontradas
		*/
		public function listarImagens(){
			$imagem = new ImagemLib();

			$listaDeImagens = $imagem->obtemImagens();

			return $listaDeImagens;
		}

		/*
		*	Edita uma imagem
		*
		*	@return array: Mensage de sucesso
		*/
		public function editarImagem(){
			$imagem = new ImagemLib();

			//Validação das informações editadas
			if($this->input->post('id') == null){
				return array('erro' => "Erro interno no sistema");
			}
			if($this->input->post('titulo') == null){
				return array('erro' => "O título não pode ser vazio");
			}
			if($this->input->post('descricao') == null){
				return array('erro' => "A descrição não pode ser vazia");
			}

			$imagem->setId($this->input->post('id'));
			$imagem->setTitulo($this->input->post('titulo'));
			$imagem->setDescricao($this->input->post('descricao'));

			$imagem->EditaImagem();

			return array('sucesso' => "Imagem editada com sucesso!");
		}

		/*
		*	Exclui uma imagem do banco de dados
		*
		*	@return array: Mensagem de sucesso
		*/
		public function excluirImagem(){
			$imagem = new ImagemLib();

			//Validação da imagem excluida
			if($this->input->post('id') == null){
				return array('erro' => "Erro interno no sistema");
			}

			$imagem->setId($this->input->post('id'));

			$imagem->excluiImagem();

			return array('sucesso' => "Imagem excluída com sucesso!");
		}

		/*
		*	Inclui uma imagem no sistema
		*
		*	@return array: Mensagem de sucesso
		*/
		public function incluirImagem(){
			$imagem = new ImagemLib();

			//Validação das informações para inclusão de uma nova imagem
			if($this->input->post('titulo') == null){
				return array('erro' => "O título não pode ser vazio");
			}
			if($this->input->post('descricao') == null){
				return array('erro' => "A descrição não pode ser vazia");
			}
			if($_FILES['endereco'] == null){
				return array('erro' => "A imagem não pode ser vazia");
			}
			if($_FILES['endereco']['type'] != 'image/jpg' && $_FILES['endereco']['type'] != 'image/jpeg' && $_FILES['endereco']['type'] != 'image/png'){
				return array('erro' => "Arquivo inválido. Sistema só aceita imagens 'png' ou 'jpg'");
			}
			if($_FILES['endereco']['size'] > 2097152){
				return array('erro' => "Arquivo muito grande. Tente utilizar uma imagem com menos de 2MB.");
			}

			$imagem->setTitulo($this->input->post('titulo'));
			$imagem->setDescricao($this->input->post('descricao'));
			$imagem->setEndereco($_FILES['endereco']);

			$imagem->incluiImagem();

			return array('sucesso' => "Imagem salva com sucesso!");
		}

		/*
		*	Obtem ultimas 3 imagems cadastradas no banco de dados
		*
		*	@return array: imagens encontradas
		*/
		public function obterUltimasImagens(){
			$imagem = new ImagemLib();

			$listaDeImagens = $imagem->obtemUltimasImagens();

			return $listaDeImagens;
		}
	}
?>