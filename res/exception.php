<?php
include 'message.php'

class Excpetion {
	
	private $errorMessage;
	private $err;
	private $isError;
	
	
	public function __construct()
	{
		 $this->err = "Verify that the number of places is a number <br> and the destination is a string. <br>
                               The specific caracter is not accepted.";
			$this->$errorMessage=new message ($err);
			$this->$isError=false;
	}
	
	public function getErrorMessage()
	{
		return $this->$errorMessage->getMessage();
		
	}
	
	public function setErrorMessage($errMess){
		
		$this->$errorMessage->setMessage($errMess)
		
	}
 	
	 public function isANumber($number)
      {
         $isNumber = false;
         if(is_numeric($number)){
            $isNumber = true;
         }
         return $isNumber;
      }
      
      
      public function isAString($string){
         $isEmpty = true;
         if(empty($string)){
            $isEmpty = false;
         }
         return $isEmpty;
      }
	
	
	
}



?>