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
      
	  /**
	  *Constructor of the class
	  */
	  
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
         
	  /**
	  *Getter of error
	  *@return True if a error occur else False
	  */
		 
      public function getIsError()
      {
         return $this->isError;
      }   
      
	  /**
	  *Setter of error
	  *@param error True if a error occur else False
	  */
	  
      public function setIsError($error)
      {
         $this->isError = $error;
      }
      
	  /**
	  *Getter of the errorMessage
	  *@return the message
	  */
	  
	  public function getErrorMessage(){
		  return $this->errorMessage->getMessage();
	  }
         
	/**
	  *Getter of the number of participant for a trip
	  *@return the number
	  */	 
      public function getNumberOfPlaces()
      {
         return $this->numberOfPlaces;
      }
      
      /**
	  *Getter of the destination for a trip
	  *@return the destination
	  */
      public function getDestination()
      {
         return $this->destination;
      }
      
     /**
	  *Setter of the number of participant for a trip
	  *@param number the new number of participant
	  */
      public function setNumberOfPlaces($number)
      {
         $this->numberOfPlaces = $number;
      }
	  
	  /**
	  *Setter of destination
	  *@dest the new destination
	  */
	  public function setDestination($dest)
	  {
		$this->destination=$dest;
	  }
      
	  /**
	  *Getter of the cancellation insurance
	  *@return True if the insurance is eneable else False
	  */
	  public function getIsInsured(){		  
		  return $this->isAssured;
	  }
	  
	  /**
	  *Setter of the cancellation insurance
	  *@pram b the new value, True if the insurance is eneable else False
	  */
	  public function setIsInsured($b){		  
		  $this->isAssured=$b;		  
	  }
	  
	  /**
	  *Destructor of the class
	  */
	  public function __destruct ()
	  {
		$this->numberOfPlaces=1;
		$this->destination="Paris";
		$this->isAssured = false;	  
	  }
      
   }

?>