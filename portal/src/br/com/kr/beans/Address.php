<?php
## KRS001 - karolinny.abreu -  16/01/15 - INÍCIO
	Class Endereco{
		private $street;
		private $city;
		private $zipCode;
		private $state;
		private $country;
		
		public function __construct($_street,$_city, $_state, $_country, $_zipCode){
			$this->setStreet($_street);
			$this->setCity($_city);
			$this->setState($_state);
			$this->setCountry($_country);
			$this->setZipCode($_zipCode);
			
		}
		
		public function getStreet(){
			return $this->street;
		}
		
		public function setStreet($_street){
			$this->street = $_street;
		}
		
		public function getCity(){
			return  $this->street;	
		}
		
		public function setCity($_city){
			$this->city = $_city;
		}
		
		public function getZipCode(){
			return  $this->zipCode;
		}
		
		public function setZipCode($_zipCode){
			$this->zipCode = $_zipCode;
		}
		
		public function getState(){
			return $this->state;	
		}
		
		public function setState($_state){
			 $this->state = $_state; 
		}
		
		public function getCountry(){
			return $this->country;
		}
		
		public function setCountry($_country){
			$this->country = $_country;
		}
	}
## KRS001 - karolinny.abreu -  16/01/15 - FIM
?>