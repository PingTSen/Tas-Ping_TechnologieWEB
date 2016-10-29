<?php
include 'message_.php';

/* Exception class that will manage all error
 */
class exception_ {
	
	private $errorMessage;
	

	
	public function __construct()
	{
		 $err = "Verify that the number of places is a number and greater than 0 <br> The destination must be a string. <br>
                               The specific caracter is not accepted.";
			$this->errorMessage=new message_($err);
			
	}
	
	public function getErrorMessage()
	{
		return $this->errorMessage->getMessage();
		
	}
	
	public function setErrorMessage($errMes){
		
		$this->errorMessage->setMessage($errMes);
		
	}
 	
	 public function isANumber($number)
      {
         $isNumber = false;
         if(is_numeric($number) && ($number>0)){
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