<?php 
## KRS001 - karolinny.abreu -  16/01/15 - BEGIN 
require 'src/br/com/kr/beans/Address.php';

	Class Contact{
		private $fone;
		private $mail;
		private $address;
		
		public function __construct($_fone, $_address, $_mail){
			$this->setAddress($_endereco);
			$this->setFone($_fone);
			$this->email($_email);
		}
		
		public function getAddress(){
			return $this->address;
		}
		
		public function setAddress($_address){
			$this->$address = $address;
		}
				
		public function getFone(){
			return $this->fone;
		}
		
		public function setFone($_fone){
			$this->fone = $fone;
		}
		
		public function getMail(){
			return $this->mail;
		}
		
		public function setMail($_mail){
			$this->mail = $_mail;
		}
	}
	## KRS001 - karolinny.abreu -  16/01/15 - END
?>