<?php

/* Exception class that will manage all error
 */
class exception_ {
	
	

 	
	 public function isANumber($number)
      {
         
         return (is_numeric($number) && ($number>0));
      }
      
      
      public function isEmpty($string){
         
         return empty($string);
      }
	
	  public function isAValidAge($listAge,$numberPeople){
		  $isOk=true;
		  $i=0;
			while($i<numberPeople && ($isOk) ){
				echo 'while';
				$isOk=(is_numeric($number) && ($number > 0 && $number < 120));
			}
			
			return $this->isOk;
		}
		   	  
	  
	   public function isNameOk($listName,$numberPeople){
			echo 'entrer';
			echo $numberPeople;
			$isOk=true;
			$i=0;
			while($i<$numberPeople && ($isOk) ){
				echo 'while';
				$isOk=!($this->isEmpty($listName[$i]));
			}
			
			return $isOk;
		}
	
	
}



?>