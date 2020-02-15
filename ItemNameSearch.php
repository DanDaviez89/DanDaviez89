<? 
include "top.php";
include "confo.php";
		
$ct = $_POST["f1"];

$query="SELECT * FROM items WHERE ItemName like '%$ct%'";
$query2 = "INSERT INTO searchlog (SearchDetails, WebPage) VALUES ('$ct', 'Items')";

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
				<img src="<?echo $r["ItemPicture"];?>" width="100%" height="300px">
			</div>
			
			<div class="column right">		
				<?
				echo "<a><h2>";
				echo $r["ItemName"]." ";
				echo "</h2>";
						
				echo "<a><b>Item Description</b><br>";
				echo $r["ItemDescription"]." ";	
				echo "<br><br>";
				echo "<b>Cost: </b>";
				echo $r["Cost"]." ";
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