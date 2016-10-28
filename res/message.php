<?php

class message{
	
	private $message;
	
	
	public function __construct ($mess){
		
		$this->message=$mess;
		
	}
	
	public function getMessage(){
		
		return $this->message;
		
	}
	
	public function setMessage($mess){
		
		$this->message=$mess;
		
	}
	
	
}

?>