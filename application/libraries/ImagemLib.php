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

		public function ObtemImagens(){
			$sql = "SELECT * FROM imagem";
			$query = $this->db->query($sql);

			if($query->result() != null){
				return $query->result_array();
			}else{
				return false;
			}
		}
	}
?>