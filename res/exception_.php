<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->

<?php

/* Exception class that will manage all error
 */

class exception_ {
		
		
	/**
	*Function that check if the param is a number
	*@param number, number to test
	*@return True if is a number else False
	*/	
	 public function isANumber($number)
     {        
         return (is_numeric($number) && ($number>0 && $number <10));
     }
      
      /**
	*Function that check if the param is empty
	*@param string, value to test
	*@return True if is empty else False
	*/
     public function isEmpty($string){         
         return empty($string);
     }
	
	/**
	*Function that check if the age is logic
	*@param listAge, age of each participant of a trip
	*@pram numberPeople, number of participant
	*@return True if the age is correct else False
	*/
	 public function isAValidAge($listAge,$numberPeople){
		  $isOk=true;
		  $i=0;
		  while($i<$numberPeople && ($isOk) ){			
			   $number=$listAge[$i];
			   $isOk=(is_numeric($number) && ($number > 0 && $number < 120));
			   $i++;
		  }			
		  return $isOk;
	 }
		   	  
	  /**
	*Function that check if the name is correct
	*@param listName, name of each participant
	*@param numberPeople, number of participant
	*@return True if the name is correct else False
	*/
	 public function isNameOk($listName,$numberPeople){
		  $isOk=true;
		  $i=0;
		  while($i<$numberPeople && ($isOk) ){				
			   $isOk=!($this->isEmpty($listName[$i]));
			   $i++;
		  }		
		  return $isOk;
	 }
	
}

?>