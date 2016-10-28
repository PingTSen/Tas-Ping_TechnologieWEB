<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<?php

include 'excepetion.h'

   
   
   class reservation{
      
      private $html;
      private $numberOfPlaces;
      private $errorMesage;
      private $destination;
      private $isError;
      
      public function __construct()
      {
         
         $this->numberOfPlaces = 0;
		 $errorMesage = new exception();
      
      }
         
      public function getIsError()
      {
         return $this->isError;
      }   
      
      public function setIsError($error)
      {
         $this->isError = $error;
      }
         
         
      public function getNumberOfPlaces()
      {
         return $this->numberOfPlaces;
      }
      
      
      public function getDestination()
      {
         return $this->destination;
      }
      
      
      public function getErrorMesage(){
         return $this->errorMesage->getErrorMesage();
      }
	  
	  public function setErrorMesage($error){
		  $this->errorMesage->setErrorMesage($error);
	  }
      
      public function setNumberOfPlaces($number)
      {
         $this->numberOfPlaces = $number;
      }
	  
	  public function setDestination($dest)
	  {
		$this->  destination=$dest;
	  }
      
      
   }

?>