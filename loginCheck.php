<? 
	include "confo.php";
	include "top.php";
	
	$un=$_POST["un"];
	$pw=$_POST["pw"];
	
	$query = "SELECT * FROM user WHERE Username like '$un' AND Password like '$pw'";
	$query2 = "INSERT INTO failedloginlog (UsernameEntered, PasswordEntered) VALUES ('$un', '$pw')";
	
	$result = mysqli_query ($link, $query);
	$numrows=mysqli_num_rows($result);
	
	if($numrows==1) //Log in
	{
	?>
	<div class = "row"><a>
	<?
		session_start(); //acess the session_cache_expire
		
		$_SESSION["username"] = $un;
		echo "Thank you for loggin in";
		echo "<br>";
		echo "<br>";
		
		?>
			<form action="Champs.php" method="post">
				<input type="submit" value="Home">
			</form></a>
	</div>		
		<?
	}
	else
	{
		?>
			<div class = "row"><a>
		<?
		
		$result = mysqli_query ($link, $query2);
		
		//Code to send email goes here
		
		echo "Incorrect Infomation";
		echo "<br>";
		echo "<br>";
		echo "Please try again"; 
		echo "<br>";
		
		?>
			<form action="Login.php" method="post">
				<input type="submit" value="Back">
			</form></a?
	</div> 
	<?
	}
?>