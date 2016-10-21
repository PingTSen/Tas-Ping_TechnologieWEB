<?php
include 'reservation.php';

if (session_status() == PHP_SESSION_NONE) {
    
    session_start();
}

// Attributs
$_SESSION['reservation'] =' ';
$reservation = new reservation;
$number = $_POST['number_of_places'];
$destination = $_POST['destination'];

if (!$reservation->isANumber($number) || !$reservation->isAString($destination)){
    
    
    echo $reservation->getErrorMessage;
    
}




?>