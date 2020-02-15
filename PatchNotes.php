<? 
include "top.php";
include "confo.php";
		
$query="SELECT * FROM patch";

$result=mysqli_query($link,$query);
$numrows=mysqli_num_rows($result);

?>

<div class="row">
	<h1>Patch Notes</h1>
</div>

<br>

<?
if($numrows>0)
{
	while($r=mysqli_fetch_array($result))
	{
		?>	
		<div class="row">			
			<?
			echo "<a><h2>Patch: ";
			echo $r["PatchNumber"]." ";
			echo "</h2>";
						
			echo "<a><b>Patch Notes</b><br>";
			echo $r["PatchInformation"]." ";	
			echo "</a><br>";
			?>
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