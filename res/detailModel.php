<?php

include 'people.php';

/* Information model class
This class get all the data about the people who are part of the reservation */

   class detail{
	   
	   private $numberPeople;
	   private $name;
	   private $age;
	   private $people;
	   private $isError;
	   private $errorMessage;
	   
	   public function __construct($nb)
	   {
		   
		   $this->numberPeople=$nb;
		   $this->name = null;
		   $this->age = 1;
		   $this->isOk=false;
		   
		   $err = "Verify that the age is a number and greater than 0 and below 120 <br>
					  The name must not be empty. <br>
                      The specific caracter is not accepted.";
				
		   $this->errorMessage=new message_($err);
		   
	   }
	   
	   
	   public function createPeople($listName,$listAge){
		 
		 for($i=0;$i<$this->$numberPeople;$i++){
				
				$this->people[$i] = new people($listName.$i,$listAge.$i);
		 }
		
	   }
	   
	   public function getListPeople()
	   {
		   return $this->$people;
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
	  
	  
	   
   }




?>