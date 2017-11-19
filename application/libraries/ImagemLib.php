<?php 
	class ImagemLib{
		private $id;
		private $titulo;
		private $descricao;
		private $endereco;

		private $db;
		private $up;

		//Método construtor
		public function __construct(){
			$ci = & get_instance();

			// Acesso ao gerenciador de banco de dados do CodeIgniter			
			$this->db = $ci->db;

			// Acesso ao gerenciador de upload de arquivos do CodeIgniter
			$this->up = $ci;
		}

		//Gets Sets
		public function getId(){
			return $this->id;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}
		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}

		public function obtemImagens(){
			$sql = "SELECT * FROM imagem ORDER BY id DESC";
			$query = $this->db->query($sql);

			if($query->result() != null){
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function editaImagem(){
			$this->db->set('titulo', $this->titulo);
			$this->db->set('descricao', $this->descricao);
			$this->db->where('id', $this->id);
			$this->db->update('imagem');
		}

		public function excluiImagem(){
			$this->db->where('id', $this->id);
			$this->db->delete('imagem');

			$this->up->load->helper("file");
			unlink('./imagens_bd/'.$this->id.'.png');
		}

		public function incluiImagem(){
			//Define local para horário, pega horário atual e filtra string para ter apenas números.
			date_default_timezone_set('America/Sao_Paulo');
			$dataAtual = date('Y-m-d-H-i-s');
			$dataAtual = str_replace("-", "", $dataAtual);

			//Seta os dados recebidos no objeto do banco e insere esses dados no banco
			$this->db->set('id', $dataAtual);
			$this->db->set('titulo', $this->titulo);
			$this->db->set('descricao', $this->descricao);
			$this->db->set('endereco', base_url("imagens_bd/". $dataAtual.".png"));
			$this->db->insert('imagem');

			//Configura padrão de envio de arquivos
			$configuracao = array(
				'upload_path' => './imagens_bd/',
				'allowed_types' => 'png|jpg',
				'file_name' => $dataAtual.'.png',
				'max-size' => '2097152',
				'max-width' => '2097152',
				'max-height' => '2097152'
			);

			//Carrega biblioteca de upload de arquivos e inicializa a mesma com a configuração definida
			$this->up->upload->initialize($configuracao);

			//Tenta salvar arquivo na pasta definida, caso não consiga deleta cadastro já feito no banco e retorna falso.
			if($this->up->upload->do_upload('endereco')){
				return true;
			}else{
				$this->db->where('id', $this->id);
				$this->db->delete('imagem');

				return false;
			}
		}
	}
?>
