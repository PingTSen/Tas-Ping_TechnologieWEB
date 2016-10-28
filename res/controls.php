<?php
include 'reservation.php';
include 'main.php'


// Attributs


if (session_status() == PHP_SESSION_NONE) {
    
    session_start();
	$reservation = new reservation;
	
}else {
	
	$_SESSION['reservation'] = unserialize($reservation);
	
}




if (isset($_POST['next'])) {
 $number = $_POST['number_of_places'];
$destination = $_POST['destination'];
    if ((!$reservation->isANumber($number)) || (!$reservation->isAString($destination))){
    $reservation->setIsError(true);
	}else {
		
		$reservation->setNumberOfPlaces($number);
		$reservation->setDestination($destination);
		
	}
	
 
} elseif (isset($_POST['cancel'])) {
 
    header("Refresh:0; url=main.php");
 
} else {
 
    header("Refresh:0; url=main.php");
 
}







$_SESSION['reservation'] = serialize($reservation);


?>