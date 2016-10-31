<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<?php
  
session_start();

include 'reservation.php';
include 'exception_.php';
include 'detailModel.php';


//Attributs
$exception = new exception_;
$step=1;
$detail;

/**
 * Check sesion status.
*/

if (!isset($_SESSION["reservation"])) {
	
    $reservation = new reservation;
    $_SESSION['reservation'] = serialize($reservation);
	
} else {
	
    $reservation = unserialize($_SESSION['reservation']);
	//$detail = unserialize($_SESSION['detail']);
}


/**
 * Manage bouton event
 **/

if (isset($_POST['nextR'])) {
   
    $number = $_POST['number_of_places'];
    $destination = $_POST['destination'];

    if (($exception->isANumber($number)) && (!$exception->isEmpty($destination))){
	
        $reservation->setNumberOfPlaces($number);
		$reservation->setDestination($destination);
		if(isset($_POST['insurance'])){
			$reservation->setIsInsured(true);
		}
	    $_SESSION['reservation'] = serialize($reservation);		
		$detail = new detail($reservation->getNumberOfPlaces());
		$_SESSION['detail'] = serialize($detail);
		
		

		
		$step = 2;  
    
	}else {
		
		$reservation->setNumberOfPlaces(0);
		$reservation->setDestination("Paris");
		$reservation->setIsError(true);
		    
	}
	
 
} elseif (isset($_POST['cancel'])) {
	    $reservation->setNumberOfPlaces(0);
		$reservation->setDestination("Paris");
		session_destroy();
		$step=1;
 
} elseif (isset($_POST['nextD'])){
	
		$listName = $_POST['nom'];
		$listAge = $_POST ['age'];
		$reservation = unserialize($_SESSION['reservation']);
		$detail = unserialize($_SESSION['detail']);
		$number=$reservation->getNumberOfPlaces();
		
	    if ($exception->isNameOk($listName,$number) && $exception->isAValidAge($listAge,$number)){
			
			$detail->createPeople($listName,$listAge);
			$_SESSION['detail'] = serialize($detail);
			$step=3;
			
		}else {
			
			$detail->setIsError(true);
			$step=2;
			
		}
	    
		
	
}  elseif (isset($_POST['previousD'])){
	
		$reservation = unserialize($_SESSION['reservation']);
		echo $reservation->getNumberOfPlaces();
		$step=1;
	
}elseif (isset($_POST['validate'])){
	
	
}

$_SESSION['step'] = serialize($step);

switch ($step){
	
	case 1 : 
	
	include 'main.php';
	break;
	
	case 2 :
	
		include 'detailView.php';		
		;break;
		
	case 3 :
		     $reservation = unserialize($_SESSION['reservation']);
		     $detail = unserialize($_SESSION['detail']);
			 $detail->getListPeople();
			 echo $reservation->getIsInsured();
	
	;break;

	

}

?>