<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->
<?php
  
//session_start();

include 'reservation.php';
include 'exception_.php';
include 'detailModel.php';
include 'validateModel.php';


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
		}else {
			$reservation->setIsInsured(false);
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
		    $_SESSION['reservation'] = serialize($reservation);		
			$_SESSION['detail'] = serialize($detail);
			$step=3;
			
		}else {
			
			$detail->setIsError(true);
			$step=2;
			
		}
	    
		
	
}  elseif (isset($_POST['previousD'])){
	
		$reservation = unserialize($_SESSION['reservation']);
		$step=1;
	
}elseif (isset($_POST['validate'])){
	
	
	$step=4;
	
	
}elseif (isset ($_POST['previousV'])){
	
		$detail=unserialize($_SESSION['detail']);
		$step=2;
	
}
elseif (isset ($_POST['edition'])){
	
	echo $_GET['edition'];
	
}elseif(isset($_POST['delete'])){
	
	
	
}
elseif (isset($_POST['addReserv'])){
	
	$step=1;
	
}
elseif (isset($_POST['confirme'])){
	
	
	if (!isset($_SESSION["sql"])) {
	echo 'data';
    $mySqli = new mysqli("localhost","root","","reservation") or die ("Could not select database");
	if($mySqli->connect_errno){
		echo 'Connection failed : ('.$mySqli -> connect_errno . ')' . $mySqli->connect_errno;
	}
		
}
$peopleString='';
$isInsured='FALSE';
$dest = $reservation->getDestination();
$insur= $reservation->getIsInsured();
$v= unserialize($_SESSION['price']);
$detail = unserialize($_SESSION['detail']);
$tot=$v->getPrices();
$p = $detail->getListPeople()[0];


for($i = 0; $i<$reservation->getNumberOfPlaces(); $i++){
			$people = $detail->getListPeople()[$i];

			$peopleString.= $people->getName();
			$peopleString.= ' - '.$people->getAge();
			$peopleString.="\n<br>";
}

if($insur){
	$isInsured='TRUE';
}

if($stmt = $mySqli->prepare ("INSERT INTO `reservation` (`Destination`, `Assurance`, `Total`, `Nom - Age`) VALUES (?,?,?,?)")){
	$stmt -> bind_param("ssis", $dest, $isInsured, $tot, $peopleString);
	if (!$stmt -> execute()){
		
		echo $stmt->error;
		
	}
	
}else {
	
	echo $mySqli->error;
}
				
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
		include 'validationView.php';
	
	;break;

	case 4: 

	$val = new validate;
    $detail = unserialize($_SESSION['detail']);
    $reservation = unserialize($_SESSION['reservation']);
  	$val->calculate($detail->getListPeople());
	$val->isInssured($reservation->getIsInsured());
	$val->getPrices();
	$_SESSION['price'] = serialize($val);		
	include 'confirmationView.php';
	;break;
	

}

?>