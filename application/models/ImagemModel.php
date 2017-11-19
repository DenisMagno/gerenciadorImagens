<?php
	include APPPATH . 'libraries/ImagemLib.php';

	class ImagemModel extends CI_Model{
		public function listarImagens(){
			$imagem = new ImagemLib();

			$listaDeImagens = $imagem->obtemImagens();

			return $listaDeImagens;
		}

		public function editarImagem(){
			$imagem = new ImagemLib();

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

		public function excluirImagem(){
			$imagem = new ImagemLib();

			if($this->input->post('id') == null){
				return array('erro' => "Erro interno no sistema");
			}

			$imagem->setId($this->input->post('id'));

			$imagem->excluiImagem();

			return array('sucesso' => "Imagem excluída com sucesso!");
		}

		public function incluirImagem(){
			$imagem = new ImagemLib();

			if($this->input->post('titulo') == null){
				return array('erro' => "O título não pode ser vazio");
			}
			if($this->input->post('descricao') == null){
				return array('erro' => "A descrição não pode ser vazia");
			}
			if($_FILES['endereco'] == null){
				return array('erro' => "A imagem não pode ser vazia");
			}

			$imagem->setTitulo($this->input->post('titulo'));
			$imagem->setDescricao($this->input->post('descricao'));
			$imagem->setEndereco($_FILES['endereco']);

			$imagem->incluiImagem();

			return array('sucesso' => "Imagem salva com sucesso!");
		}
	}
?>