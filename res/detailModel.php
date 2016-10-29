<?php

include 'people.php'
include 'exception_.php'

/* Information model class
This class get all the data about the people who are part of the reservation */

   class detail{
	   
	   private $numberPeople;
	   private $name;
	   private $age;
	   private $people[];
	   
	   
	   public function __construct($nb)
	   {
		   
		   $numberPeople=$nb;
		   $name = null;
		   $age = 1;
		   		   
	   }
	   
	   
	   public function createPeople($listName,$listAge){
		 
		 for($i=0;$i<$this->$numberPeople;$i++){
				
				$this->$people[$i] = new people($listName.$i,$listAge.$i);
		 }
		
	   }
	   
	   public function getListPeople()
	   {
		   return $this->$people;
	   }
	   
	    
   
	  
	  
	   
   }




?>