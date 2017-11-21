<?php
	class Imagem extends CI_Controller{

		//Método principal do controller de imagem.
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

		//Método de edição de imagem
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

		//Método de exclusão de imagem
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

		//Método de inclusão de uma imagem
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