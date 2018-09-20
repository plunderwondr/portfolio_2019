<?php
	// error_reporting(E_ALL);
	session_start();
	
	include './include/functions.php';

	function logAction($message)
	{
		date_default_timezone_set('America/New_York');
		$datetime = date("Y-m-d H:i:s", time());
	}	
?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/style.css">
	<title><?php echo ($title); ?></title>
</head>

<!-- Twitter Bootstrap-->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/> -->

<style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc; 
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}
</style>

 <div id="myNavbar" class="navbar-collapse collapse">
 <ul class="nav navbar-nav"> 
	<li><a href="./index.php">Home</a></li>
	<li><a href="./tournament_distro.php">Tournament Distribution</a></li>
 </ul>
 </div>
 <hr/>


<html>
<body>
