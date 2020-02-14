<? 
	include "confo.php";
	include "top.php";
	
	$un=$_POST["un"];
	$pw=$_POST["pw"];
	$fn=$_POST["fn"];
	$sn=$_POST["sn"];
	$em=$_POST["em"];
	
	$query = "INSERT INTO user (Username, FirstName, Surname, Email, Password) VALUES ('$un', '$fn', '$sn', '$em', '$pw')";
	
	$result = mysqli_query ($link, $query);

	?>
	<div class = "row"><a>
	<?		
		echo "Thank you for signing up";
		echo "<br>";
		echo "<br>";
		
		?>
		<form action="Champs.php" method="post">
			<input type="submit" value="Home">
		</form></a>
	</div>		