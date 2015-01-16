<?php 

require 'src/br/com/kr/entidades/Endereco.php';

	Class Contato{
		private $telefone;
		private $email;
		private $endereco;
		
		public function __construct($_telefone, $_endereco, $_email){
			$this->setEndereco($_endereco);
			$this->setTelefone($_telefone);
			$this->email($_email);
		}
		
		public function getEndereco(){
			return $this->endereco;
		}
		
		public function setEndereco($_endereco){
			$this->telefone = $endereco;
		}
				
		public function getTelefone(){
			return $this->telefone;
		}
		
		public function setTelefone($_telefone){
			$this->telefone = $telefone;
		}
		
		public function getEmail(){
			return $this->email;
		}
		
		public function setTelefone($_email){
			$this->email = $_email;
		}
	}
?>