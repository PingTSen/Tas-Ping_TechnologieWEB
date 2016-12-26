<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->

<?php

include 'people.php';

/*  Information model class.
    This class get all the data about the people who are part of the reservation. */

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
	   
	   /**
	   * This function creat a list of people
	   *@param listName, a list of name of each passenger for a reservation
	   *@param listAge, a list of age of each passenger for a reservation
	   */
	    public function createPeople($listName,$listAge){	 
		    for($i=0;$i<$this->numberPeople;$i++){			
				$this->people[$i] = new people($listAge[$i],$listName[$i]);
			}		
	    }
	   
	   /**
	   *Getter of a list of people
	   *@return a list of people
	   */
	    public function getListPeople()
	    {
		    return $this->people;
	    }    
	   
		/**
		*Getter of error
		*@retunr a boolean True if a error occure else False
		*/
		public function getIsError()
        {
            return $this->isError;
        }   
      
		/**
		*Setter of error
		*@param error, a boolean value that indicate if a error occure
		*/
        public function setIsError($error)
        {
            $this->isError = $error;
        }
		
   
		/**
		*Getter of error Message
		*@retunr error message
		*/
	    public function getErrorMessage(){  
		    return $this->errorMessage->getMessage();		  
	    }  	  
	   
    }

?>