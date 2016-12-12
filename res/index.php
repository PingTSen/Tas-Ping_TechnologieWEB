<!-- Author : Ping Tian-Sen Anthony & Tas Emine -->

<?php
  
session_start();

if (!isset($_SESSION["sql"])) {
	
    $mySqli = new mysqli("localhost","root","","reservation") or die ("Could not select database");
	if($mySqli->connect_errno){
		echo 'Connection failed : ('.$mySqli -> connect_errno . ')' . $mySqli->connect_errno;
	}
    $_SESSION['mySqli'] = serialize($mySqli);
	
} else {
	
    $mySqli= unserialize($_SESSION['mySqli']);
}



if (!empty($_GET['page']) && is_file($_GET['page'].'.php')){
	
	
	include $_GET['page'].'.php';
	
}else {
		
	include 'controls.php';
	
}

?>