<?php
	class Imagem extends CI_Controller{
		public function index(){
			$this->load->helper('url');
			$this->load->view('component/head.php');
			$this->load->model('ImagemModel', 'model');

			$dados = array('imagens' => $this->model->obterUltimasImagens());
			$this->load->view('carousel.php', $dados);

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

			$dados = array('imagens' => $this->model->obterUltimasImagens());
			$this->load->view('carousel.php', $dados);

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

			$dados = array('imagens' => $this->model->obterUltimasImagens());
			$this->load->view('carousel.php', $dados);

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

			$dados = array('imagens' => $this->model->obterUltimasImagens());
			$this->load->view('carousel.php', $dados);

			$this->load->view('inclusaoImagem.php', $data);

			$dados = array('imagens' => $this->model->listarImagens());
			$this->load->view('galeria.php', $dados);
			$this->load->view('component/footer.php');
		}
	}
?>