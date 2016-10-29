<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<?php


include 'reservation.php';
include 'exception_.php';



//Attributs

$exception = new exception_;
$step=1;

/**
 * Check sesion status.
*/
if (session_status() == PHP_SESSION_NONE) {
    session_start();
   	$reservation = new reservation;
	
	
}else {
	
	
	
	$reservation = unserialize($_SESSION['reservation']);
	$step = unserialize ($_SESSION['step']);
}

//

/**
 * Manage bouton event
 **/

if (isset($_POST['nextR'])) {
   
    $number = $_POST['number_of_places'];
    $destination = $_POST['destination'];

    if ((!$exception->isANumber($number)) || (!$exception->isAString($destination))){
        
        $reservation->setIsError(true);
        
    
	}else {
		
		$reservation->setNumberOfPlaces($number);
		$step = 2;      
	}
	
 
	} elseif (isset($_POST['cancelR'])) {
      
		header("Refresh:0"); //rafraichie la page
 
	} elseif (isset($_POST['nextD'])){
	
		$step=3;
	
	} elseif (isset($_POST['cancelD'])){
		
		$step=1;
		
	
	} elseif (isset($_POST['previousD'])){
	
}

$_SESSION['step'] = serialize($step);
switch ($step){
	
	case 1 : include 'main.php'; break;
	
	case 2 :
		$_SESSION['reservation'] = serialize($reservation);
		include 'detailView.php';
		include 'detailModel.php';
		;break;

}

?>