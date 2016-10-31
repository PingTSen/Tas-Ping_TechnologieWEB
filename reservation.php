<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<?php

include 'message_.php';


   /**
	*Reservation model class
	*This class manage the reservation 
   */
   
   class reservation{
      
      private $html;
      private $numberOfPlaces;
      private $destination;
      private $isError;
	  private $errorMessage;
	  private $isAssured;
      
      public function __construct()
      {
         
         $this->numberOfPlaces = 0;
		 $this->destination="Paris";
		 $this->isAssured=false;
		 $err = "Verify that the number of places field is a number and greater than 0 and below 10<br>
				The destination field must not be empty. <br>
                The specific caracter is not accepted.";
				
		 $this->errorMessage=new message_($err);
		 
      
      }
         
      public function getIsError()
      {
         return $this->isError;
      }   
      
      public function setIsError($error)
      {
         $this->isError = $error;
      }
      
	  public function getErrorMessage(){
		  return $this->errorMessage->getMessage();
	  }
         
      public function getNumberOfPlaces()
      {
         return $this->numberOfPlaces;
      }
      
      
      public function getDestination()
      {
         return $this->destination;
      }
      
      
      
      public function setNumberOfPlaces($number)
      {
         $this->numberOfPlaces = $number;
      }
	  
	  public function setDestination($dest)
	  {
		$this->  destination=$dest;
	  }
      
	  public function getIsInsured(){
		  
		  return $this->isAssured;
	  }
	  
	  public function setIsInsured($b){
		  
		  $this->isAssured=$b;
		  
	  }
	  
	  public function __destruct ()
	  {

		$this->numberOfPlaces=0;
		$this->destination="Paris";
		$this->isAssured = false;
	  
	  }
      
   }

?>