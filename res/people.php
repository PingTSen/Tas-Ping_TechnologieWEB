<?php

 /* Class for a people
 This class has all the info about one personne */

   class people{
	   
	   private $age=0;
	   private $name=" ";
	   

	   
	   public function __construct($age,$name)
	   {
		   
		   $this->age = $age;
		   $this->name=$name;
		   
		   
	   }
	   
	   public function getName()
	   {
		   return $this->name;
	   }
	   
	   public function getAge()
	   {
		   return $this->age;
	   }
	   
	   public function setName($name)
	   {
		   $this->name=$name;
	   }
	   
	   public function setAge($age)
	   {
		    $this->age=$age;
	   }
   }




?>