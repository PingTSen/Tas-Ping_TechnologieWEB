<?php

/* Exception class that will manage all error
 */
class exception_ {
	
	

 	
	 public function isANumber($number)
      {
         
         return (is_numeric($number) && ($number>0 && $number <10));
      }
      
      
      public function isEmpty($string){
         
         return empty($string);
      }
	
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