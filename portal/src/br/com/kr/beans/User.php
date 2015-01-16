<?php
## KRS001 - karolinny.abreu -  16/01/15 - INÍCIO
	Class User extends Person{
		private $nick;
		private $password;
		
		public function __construct($_name, $_birthday, $_contact, $_nick, $_password){
			parent::__construct($_name, $_birthday, $_contact);
			$this->nick = $_nick;
			$this->password = $_password;
		}
		
		public function getNick(){
			return $this->nick;
		}
		
		public function setNick($_nick){
			$this->nick = $_nick;
		}
		
		public function getPassword(){
			return $this->password;
		}
		
		public function setPassword($_password){
			$this->password = $_password;
		}
		
	}
## KRS001 - karolinny.abreu -  16/01/15 - FIM
?>