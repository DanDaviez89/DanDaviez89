<? 
include "top.php";
include "confo.php";

$query="SELECT * FROM champs Where Tier like 'S'";
$query2="SELECT * FROM champs Where Tier like 'A'";
$query3="SELECT * FROM champs Where Tier like 'B'";
$query4="SELECT * FROM champs Where Tier like 'C'";

$result=mysqli_query($link,$query);
$numrows=mysqli_num_rows($result);

$result2=mysqli_query($link,$query2);
$numrows2=mysqli_num_rows($result2);

$result3=mysqli_query($link,$query3);
$numrows3=mysqli_num_rows($result3);

$result4=mysqli_query($link,$query4);
$numrows4=mysqli_num_rows($result4);

?>  
	<div class="row">
		<h1>Tier List</h1>
	</div>
	
	<br>

	<div class="row">
		<div class = "column four">			
			<a style="background-color:#cccc00">S Tier</a>
			
			<div class ="row">
			<?
				if($numrows>0)
				{
					while($r=mysqli_fetch_array($result))
					{
					?>
						<div class="column grid">
							<img src="<?echo $r["ChampImage"];?>" width="100%" height="90px">
						</div>
					<?
					}
				}
				?>	

			</div>
		</div>
		
		<div class = "column four">
			<a style="background-color:#009933">A Tier</a>
			<div class ="row">
			<?
				if($numrows2>0)
				{
					while($r=mysqli_fetch_array($result2))
					{
					?>
						<div class="column grid">
							<img src="<?echo $r["ChampImage"];?>" width="100%" height="90px">
						</div>
					<?
					}
				}
				?>	

			</div>
		</div>
		
		<div class = "column four">
			<a style="background-color:#ff9933">B Tier</a>
			<div class ="row">
			<?
				if($numrows3>0)
				{
					while($r=mysqli_fetch_array($result3))
					{
					?>
						<div class="column grid">
							<img src="<?echo $r["ChampImage"];?>" width="100%" height="90px">
						</div>
					<?
					}
				}
				?>	

			</div>
		</div>
		<div class = "column four">
			<a style="background-color:#ff3333">C tier</a>
			<div class ="row">
			<?
				if($numrows4>0)
				{
					while($r=mysqli_fetch_array($result4))
					{
					?>
						<div class="column grid">
							<img src="<?echo $r["ChampImage"];?>" width="100%" height="90px">
						</div>
					<?
					}
				}
				?>	

			</div>
		</div>
	</div>
