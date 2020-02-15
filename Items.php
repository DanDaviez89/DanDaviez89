<? 
include "top.php";
include "confo.php";
		
$query="SELECT * FROM items";

$result=mysqli_query($link,$query);
$numrows=mysqli_num_rows($result);

?>


<div class="row">
	<h1>Items List</h1>
</div>

<br>

<div class="row">
	<form action="ItemNameSearch.php" method="post">
		<a>Search Any Item For More Information<br><br>
			
		<input type="text" value="Search" name="f1">
		
		<input type="submit" value="Submit"></a>
	</form>
</div>

<div class ="row">
<?
	if($numrows>0)
	{
		while($r=mysqli_fetch_array($result))
		{
			?>
			<div href class="column FiveGrid">
				
				<img src="<?echo $r["ItemPicture"];?>" width="100%" height="100px">
				
				<h3>
				<?
				echo $r["ItemName"]." ";
				?>
				</h3>
			</div>
			<?
		}
	}
	?>	

</div>
<br>
<?