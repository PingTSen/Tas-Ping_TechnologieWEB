<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<?php


   /**
	*Reservation model class
	*This class manage the reservation 
   */
   
   class reservation{
      
      private $html;
      private $numberOfPlaces;
      private $destination;
      private $isError;
      
      public function __construct()
      {
         
         $this->numberOfPlaces = 0;
		 $destionation='';
		 $errorMessage = new exception();
      
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