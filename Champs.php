<? 
include "top.php";
include "confo.php";
		
$query="SELECT * FROM champs";

$result=mysqli_query($link,$query);
$numrows=mysqli_num_rows($result);

?>
<ul>    
	<div class="row">
		<div class = "column grid">			
			<form action="ChampsTypeSearch.php" method="post">
				<a>Champion Type<br>
				<input type="radio" name="f1" value="F"> Fighter<br>
				<input type="radio" name="f1" value="T"> Tank<br>
				<input type="radio" name="f1" value="S"> Support<br>
				<input type="radio" name="f1" value="A"> Assassin<br>
				<input type="radio" name="f1" value="M"> Mage<br>
				<input type="radio" name="f1" value="MM">Marksman<br>
				<input type="submit" value="Submit">
			</form></a>	
		</div>
		
		<div class = "column grid">
			<form action="ChampsTierSearch.php" method="post">
				<a>Champion Type<br>
				<input type="radio" name="f1" value="Stier"> S<br>
				<input type="radio" name="f1" value="Atier"> A<br>
				<input type="radio" name="f1" value="Btier"> B<br>
				<input type="radio" name="f1" value="Ctier"> C<br>
				<input type="submit" value="Submit">
			</form></a>	
		</div>
		
		<div class = "column grid">
			<form action="ChampsNameSearch.php" method="post">
				<a>Champion Name<br><br>
			
				<input type="text" value="Search" name="f1">
		
				<input type="submit" value="Submit"></a>
			</form>

		</div>
	</div>
</ul>

<br>
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
	echo"Nothing Found";
}
	
?>