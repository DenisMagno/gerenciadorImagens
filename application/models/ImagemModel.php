<?php
	include APPPATH . 'libraries/ImagemLib.php';

	class ImagemModel extends CI_Model{
		public function listarImagens(){
			$listaDeImagens = array(
				array('id' => 1, 'titulo' => 'Imagem1', 'descricao' => 'Descrição da imagem1', 'endereco' => 'https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg'),
				array('id' => 2, 'titulo' => 'Imagem2', 'descricao' => 'Descrição da imagem2', 'endereco' => 'https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg'),
				array('id' => 3, 'titulo' => 'Imagem3', 'descricao' => 'Descrição da imagem3', 'endereco' => 'https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg'),
				array('id' => 1, 'titulo' => 'Imagem1', 'descricao' => 'Descrição da imagem1', 'endereco' => 'https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg'),
				array('id' => 2, 'titulo' => 'Imagem2', 'descricao' => 'Descrição da imagem2', 'endereco' => 'https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg'),
				array('id' => 3, 'titulo' => 'Imagem3', 'descricao' => 'Descrição da imagem3', 'endereco' => 'https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg')
			);

			/*$imagem = new ImagemLib();

			$listaDeImagens = $imagem->ObtemImagens();*/

			return $listaDeImagens;
		}
	}
?>