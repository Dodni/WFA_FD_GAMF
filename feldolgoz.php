<?php
require_once('connect.php');

if(isset($_POST['kuldes'])){
	
	$email=$_POST['email'];
	$name=$_POST['name'];
	$jelszo=$POST['jelszo'];
	$kor=$_POST['kor'];
	$gender=$_POST['nem'];
	
	$hibak=array();
	if(empty($name) || empty($email) || empty($darab)){
		$hibak[]="Minden adatot írjon be!";
	}

	if(!empty($name)){
	if(strlen($name) < 8 || strlen($name) > 30 ){
		$hibak[] = "A név legyen minumum 5, maximum 30 karakter!";
	} 
		else $helyes[] = "<div style='background-color:yellow;'>Név: " .$name . " Helyes!</div>";
	}
	

	if(!empty($kor)){
	if(!is_numeric($kor) || $kor > 17){
		$hibak[]="A kornak tobbnek kell lennie mint 17!";
		
	}
		else $helyes[] = "<div style='background-color:yellow;'>Kor: " . $kor . " Helyes!</div>";
	
	}
	
	if(!empty($jelszo)){
	if(!is_numeric($jelszo) || $jelszo < 5 || $jelszo > 13){
		$hibak[]="A jelszo mezőbe csak számot írhat, 6 és 12 között!";
		
	}
		else $helyes[] = "<div style='background-color:yellow;'>Jelszo: " . $jelszo . " Helyes!</div>";
	
	}



	if(!empty($email)){
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)){
		$hibak[] = "Használjon érvényes email címet!";	
		
	
	}
		else $helyes[] = "<div style='background-color:yellow;'>Email: " . $email . " Helyes!</div>";
	}
	
	
if(count($hibak)==0){
$sql = "INSERT INTO rendeles (email,nev,jelszo,kor,nem) VALUES (,'$email','$name','$kor','$gender')";

if (mysqli_query($conn, $sql) ) {
  echo "Sikres regisztracio!";
}
} else echo "Sikertelen regisztracio";

mysqli_close($conn);

}


?>