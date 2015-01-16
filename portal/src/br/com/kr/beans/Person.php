<?php
## KRS001 - karolinny.abreu -  16/01/15 - INÍCIO
	Class Person{
		
		private $name;
		private $birthday;
		private $contact;
		
		public function __construct($_name, $_birthday, $_contact){
			$this->setName($_name);
			$this->setBirthday($_birthday);
			$this->setContact($_contact);
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function setName($_name){
			$this->name = $_name;
		}

		public function getBirthday(){
			return $this->birthday;
		}
		
		public function setBirthday($_Birthday){
			$this->birthday = $_birthday;
		}
		
		public function getContact(){
			return $this->contact;
		}
		
		public function setContact($_contact){
			$this->contact = $_contact;
		}
		
	}
## KRS001 - karolinny.abreu -  16/01/15 - FIM
?>