<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->

<?php


/**
The scope of this class is to calculate the price for each trip.
*/


class validate {
	
	private $price ;
	
	/**
	* Constructor of the class
	*/
	
	public function __construct (){		
		$this->price=0;		
	}
	
	/**
	*This function calculate the price for a trip
	*@param listPeople, participant of a trip
	*/
	
	public function calculate ($listPeople){		
		foreach($listPeople as $people){		  
		    if ($this->isKid($people->getAge())){			  
			    $this->price+=12;	  
		    }else {			  
			    $this->price+=15;			  
		    }		  		   
		}		
	}
	
	/**
	*Function that check if the cancellation insurance is eneable
	*/
	
	public function isInssured($insured){		
		if($insured){
			$this->price+=20;
		}		
	}
	
	/**
	*Function that check if a participant is a kid
	*@param age of a participant
	*/
	
	private function isKid($age){		
		return ($age<=12);		
	}
	
	/**
	*Getter of the price for a trip
	*@return the price
	*/
	
	public function getPrices(){
		return $this->price;
	}
		
}




?>