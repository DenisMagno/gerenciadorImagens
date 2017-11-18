<?php
	class Imagem extends CI_Controller{
		public function index(){
			$this->load->helper('url');
			$this->load->view('component/head.php');
			$this->load->model('ImagemModel', 'model');

			$this->load->view('inclusaoImagem.php');

			$dados = array('imagens' => $this->model->listarImagens());
			$this->load->view('galeria.php', $dados);
			$this->load->view('component/footer.php');
		}
	}
?>