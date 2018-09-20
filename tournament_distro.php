<?php
    error_reporting(E_ALL);
	$title = "index";
   include './include/header.php';
//    echo "test";
?>


<h3>Swiss Rounds Generator</h3>


<form action="./tournament_distro.php" method="get">
	<table>
		<tr>
			<td>Num Players</td>
			<td>Num Rounds</td>
		</tr>
		<tr>
			<td><input type="text" name="playerCount" value="24"><input type="checkbox" name="autoPlayers"> Auto Players<br></td>
			
			<td><input type="text" name="roundCount" value ="2"><input type="checkbox" name="autoRound" checked> Auto Rounds<br></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Submit">
			</td>
		</tr>
	</table>

</form>

<?php 



if(isset($_GET["playerCount"]))
{
	$playerCount = $_GET["playerCount"];
	$roundCount = $_GET["roundCount"];

	if(isset($_GET["autoPlayers"]) && isset($_GET["autoRound"]))
	{
		echo "Please only check one checkbox" . "</br>";
	}
	elseif(isset($_GET["autoPlayers"]))
	{
		//2^n players
		$playerCount = pow(2,$roundCount); // Checked
	}
	elseif(isset($_GET["autoRound"]))
	{
		// log(n)/log(2) rounds
		$roundCount = ceil(log($playerCount)/log(2)); // Checked
	}
	/*
	Processing loop
	*/

	$resultsArray = [];
	$preProcess = [];
	$postProcess = [];
	for ($i= 0; $i<= $roundCount; $i++)
	{
		// array = [playerNo][Wins][Losses][array(played PlayerNo)]
		//grab array, add results to postSort



		// add results 
	}
	/*
	Output 
	*/
	echo "<table>";
	for ($i= 0; $i<= $roundCount; $i++)
	{
		$wins = $i;
		$loss = $roundCount - $i;
		echo "<tr><td>";
			echo $wins . " - " . $loss;
		echo "</td><td>";
			echo "results";
		echo "</td></tr>";

	}
	echo "</table>";

}


?>


<?php
   include './include/footer.php';
?>