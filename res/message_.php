<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->

<?php

/* Message class.
   This class create and modify message. */

class message_{
	
	private $message;
		
	/**
	*Constructor
	*@param mess, the message
	*/	
	public function __construct($mess){		
		$this->message=$mess;		
	}
	
	/**
	*Getter of the message
	*@return the message
	*/
	
	public function getMessage(){		
		return $this->message;		
	}
	
	/**
	*Setter of the message
	*@param mess, the new message
	*/
	
	public function setMessage($mess){		
		$this->message=$mess;		
	}
		
}

?>