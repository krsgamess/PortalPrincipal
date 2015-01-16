<?php
	Class Endereco{
		private $rua;
		private $cidade;
		private $cep;
		private $estado;
		private $pais;
		
		public function __construct($_rua,$_cidade, $_estado, $_pais){
			$this->setRua($_rua);
			$this->setCidade($_cidade);
			$this->setEstado($_estado);
			$this->setPais($_pais);
			$this->setCep($_cep);
			
		}
		
		public function getRua(){
			return $this->rua;
		}
		
		public function setRua($_rua){
			$this->rua = $_rua;
		}
		
		public function getCidade(){
			return  $this->cidade;	
		}
		
		public function setCidade($_cidade){
			$this->cidade = $_cidade;
		}
		
		public function getCep(){
			return  $this->cep;
		}
		
		public function setCep($_cep){
			$this->cep = $_cep;
		}
		
		public function getEstado(){
			return $this->estado;	
		}
		
		public function setEstado($_estado){
			 $this->estado = $_estado; 
		}
		
		public function getPais(){
			return $this->pais;
		}
		
		public function setPais($_pais){
			$this->pais = $_pais;
		}
	}
?>