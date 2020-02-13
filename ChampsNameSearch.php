<? 
include "top.php";
include "confo.php";
		
$ct = $_POST["f1"];

$query="SELECT * FROM champs WHERE ChampName like '$ct%'";
$query2 = "INSERT INTO searchlog (SearchDetails, WebPage) VALUES ('$ct', 'Champs')";

$result=mysqli_query($link,$query);
$numrows=mysqli_num_rows($result);

?> <br>

	<form action="Champs.php" method="post">
		<input type="submit" value="Remove Filter">
	</form>
<?



if($numrows>0)
{
	while($r=mysqli_fetch_array($result))
	{
		?>	
		<div class="row">
			<div class="column left">
				<img src="<?echo $r["ChampImage"];?>" width="100%" height="300px">
			</div>
			<div class="column right">		
				<?
				echo "<a><h2>";
				echo $r["ChampName"]." ";
				echo "</h2>";
						
				echo "<a><b>About</b><br>";
				echo $r["ChampDescription"]." ";	
				echo "<br><br>";
				echo "<b>Type: </b>";
				echo $r["ChampType"]." ";
				echo "<br><br><b>Tier: </b>";
				echo $r["Tier"]." ";
				echo "</a><br>";
						
						
				?>
			</div>
		</div>
		<br>
		<?
	}
}

else 
{
	?>
	<div class="row">
		<br>
		<a>Nothing Found!!</a>
		<br>
	</div>
	<?
}
$result = mysqli_query ($link, $query2);	
?>
	<br>
	<form action="Champs.php" method="post">
		<input type="submit" value="Remove Filter">
	</form>
<?	