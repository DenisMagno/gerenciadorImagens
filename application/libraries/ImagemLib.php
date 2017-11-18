<?php 
	class ImagemLib{
		private $id;
		private $titulo;
		private $descricao;
		private $endereco;

		private $db;

		//Método construtor
		public function __construct(){
			// Acesso ao gerenciador de banco de dados do CodeIgniter
			$ci = & get_instance();
			$this->db = $ci->db;
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
		}

		public function incluiImagem(){
			date_default_timezone_set('America/Sao_Paulo');
			$dataAtual = date('Y-m-d-H-i-s');
			$dataAtual = str_replace("-", "", $dataAtual);

			$data = array(
				'id' => $dataAtual,
				'titulo' => $this->titulo,
				'descricao' => $this->descricao,
				'endereco' => $this->endereco
			);

			$this->db->insert('imagem', $data);
		}
	}
?>
