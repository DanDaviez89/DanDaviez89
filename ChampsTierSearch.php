<? 
include "top.php";
include "confo.php";
		
$ct = $_POST["f1"];

$query="SELECT * FROM champs WHERE Tier like ";

if($ct == 'Stier')
{
	$query.="'S'";
}
if($ct == 'Atier')
{
	$query.="'A'";
}
if($ct == 'Btier')
{
	$query.="'B'";
}
if($ct == 'Ctier')
{
	$query.="'C'";
}



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
	
?>
	<br>
	<form action="Champs.php" method="post">
		<input type="submit" value="Remove Filter">
	</form>
<?	