<?php
include 'reservation.php';
if (session_status() == PHP_SESSION_NONE) {
    
    session_start();
}
// Attributs

$reservation = new reservation;
$number = $_POST['number_of_places'];
$destination = $_POST['destination'];
$isError = ((!$reservation->isANumber($number)) || (!$reservation->isAString($destination)));
$reservation->setIsError($isError);
$_SESSION['reservation'] = serialize($reservation);
    // echo '<script language="javascript">';
    // echo 'alert('.$reservation->getErrorMesage().')'; 
    // echo '</script>';
    //echo $reservation->getErrorMesage();
    //echo "<script> alert('".$reservation->getErrorMesage()."') \"></script<br>";

?>