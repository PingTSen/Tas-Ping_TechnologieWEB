<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<?php
include 'reservation.php';

/**
 * Check sesion status.
*/

if (session_status() == PHP_SESSION_NONE) {
    
    session_start();
	$reservation = new reservation;
	
}else {
	
	$reservation = unserialize($_SESSION['reservation']);
	
}

/**
 * Manage event.
 **/

if (isset($_POST['next'])) {
   
    $number = $_POST['number_of_places'];
    $destination = $_POST['destination'];

    if ((!$reservation->isANumber($number)) || (!$reservation->isAString($destination))){
        
        $reservation->setIsError(true);
        
    
	}else {
		
		$reservation->setNumberOfPlaces($number);
		//$reservation->setDestination($destination);
        //$html  = '<a href="detailView.php">';
        //echo $html;
        
		include 'detailView.php';
        
	}
	
 
} elseif (isset($_POST['cancel'])) {
      
    header("Refresh:0"); //rafraichie la page
 
}

$_SESSION['reservation'] = serialize($reservation);
include 'main.php';

?>