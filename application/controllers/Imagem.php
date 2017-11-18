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

		public function editarImagem(){
			$this->load->helper('url');
			$this->load->view('component/head.php');
			$this->load->model('ImagemModel', 'model');

			$data['mensagem'] = $this->model->editarImagem();

			$this->load->view('inclusaoImagem.php', $data);

			$dados = array('imagens' => $this->model->listarImagens());
			$this->load->view('galeria.php', $dados);
			$this->load->view('component/footer.php');
		}

		public function excluirImagem(){
			$this->load->helper('url');
			$this->load->view('component/head.php');
			$this->load->model('ImagemModel', 'model');

			$data['mensagem'] = $this->model->excluirImagem();

			$this->load->view('inclusaoImagem.php', $data);

			$dados = array('imagens' => $this->model->listarImagens());
			$this->load->view('galeria.php', $dados);
			$this->load->view('component/footer.php');
		}

		public function incluirImagem(){
			$this->load->helper('url');
			$this->load->view('component/head.php');
			$this->load->model('ImagemModel', 'model');

			$data['mensagem'] = $this->model->incluirImagem();

			$this->load->view('inclusaoImagem.php', $data);

			$dados = array('imagens' => $this->model->listarImagens());
			$this->load->view('galeria.php', $dados);
			$this->load->view('component/footer.php');
		}
	}
?>