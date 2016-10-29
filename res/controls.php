<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<?php

include 'reservation.php';
include 'exception_.php';


//Attributs

$exception = new exception_;


/**
 * Check sesion status.
*/

if (session_status() == PHP_SESSION_NONE) {
    
    session_start();
	$reservation = new reservation;
	$step=1;
	
}else {
	
	$reservation = unserialize($_SESSION['reservation']);
	$step = unserialize ($_SESSION['step']);
}



/**
 * Manage bouton event
 **/

if (isset($_POST['next'])) {
   
    $number = $_POST['number_of_places'];
    $destination = $_POST['destination'];

    if ((!$exception->isANumber($number)) || (!$exception->isAString($destination))){
        
        $reservation->setIsError(true);
        
    
	}else {
		
		$reservation->setNumberOfPlaces($number);
		$step = 2;
        
		include 'detailView.php';
        
	}
	
 
} elseif (isset($_POST['cancel'])) {
      
    header("Refresh:0"); //rafraichie la page
 
}

$_SESSION['reservation'] = serialize($reservation);
include 'main.php';

?>