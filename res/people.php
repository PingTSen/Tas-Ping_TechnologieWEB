<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->

<?php

 /* Class for a people.
    This class has all the data about one person. */

    class people{
	   
	    private $age=0;
	    private $name=" ";
	   
	    /*
		*Constructor for a people
		*@param age
		*@param name
		*/
	    public function __construct($age,$name)
	    {		   
	 	    $this->age = $age;
		    $this->name=$name;		   		   
	    }
	   
	    /**
		*Getter for a name
		*return a name
		*/
	    public function getName()
	    {
		    return $this->name;
	    }
	   
	    /**
		*Getter for a age
		*return a age
		*/
	    public function getAge()
	    {
		    return $this->age;
	    }
	   
	    /**
		*Setter for a name
		*@param name the new name
		*/
	    public function setName($name)
	    {
		    $this->name=$name;
	    }
	   
	    /**
		*Setter for a age
		*@param age, the new age
		*/
	    public function setAge($age)
	    {
		     $this->age=$age;
	    }
	   
    }

?>