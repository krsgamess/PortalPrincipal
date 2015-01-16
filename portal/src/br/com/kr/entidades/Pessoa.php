<?php
	Class Pessoa{
		
		private $nome;
		private $dataNascimento;
		private $contato;
		
		public function __construct($_nome, $_dataNascimento, $_contato){
			
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setNome($_nome){
			$this->nome = $_nome;
		}
		
		
		
	}
?>