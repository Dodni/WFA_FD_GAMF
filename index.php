<?php
require_once('feldolgoz.php');
//FEHÉR DONÁT ECFE35
?>
<! DOCTYPE html>
<html>
	<style>
	#content {
	margin-right: -50px;
	
	
	
	}
	head, body{
		background-color: rgb(153, 153, 255);
	}
	</style>
    <head>
        <meta charset="utf-8">
        <title>Feladat 3</title>
        <link rel="stylesheet" type="text/css" href="feladat3.css">
		<script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>
		<h1 id="focim">Termékrendelés</h1>
        <div>
         
        <h2>Termék - Laptop-01</h2>
		
		<form action="feldolgoz.php" method="post">
		<nav id="content"> <img src="kep.jpg">  </nav>
		<label>E-mail:</label><input type="text" id="email" name="email" size="20" maxlength="40"><br/>
		<label>Név:</label><input type="text" id="nev" name="nev" min="5" max="30"size="20" maxlength="40"><br/>
		<label>Jelszo:</label><input id="jelszo" type="password" name="jelszo" min="6" max="18" size="20" maxlength="40" required><br>
		<label>Kor:</label><input id="darab" type="number" name="darab" size="20" maxlength="40" min="18" max="100"  required><br>
		<label>Nem:</label>
		<input type="radio" id="male" name="gender" value="male">
		
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br>
		<input id="kuld" type="submit" value="Küld">
		<button onclick="ellenoriz();" type="button">Ellenőriz</button>
		
		
		
        </div>  
    </body>
</html>