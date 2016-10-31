<?php

class validate {
	
	private $price ;
	
	
	public function __construct (){
		
		$this->price=0;
		
	}
	
	public function calculate ($listPeople){
		
		foreach($listPeople as $people){
		  
		  if ($this->isKid($people->getAge())){
			  
			  $this->price+=12;
			  
		  }else {
			  
			  $this->price+=15;
			  
		  }		  
		   
		}
		
	
		
	}
	
	public function isInssured($insured){
		
		if($insured){
			$this->price+=20;
		}
		
	}
	
	private function isKid($age){
		
		return ($age<=12);
		
	}
	
	public function getPrices(){
		return $this->price;
	}
	
	
}




?>