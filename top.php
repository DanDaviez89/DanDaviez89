<html>
<head>
	<link rel="stylesheet" type="text/css" href="styleSheet.css">
</head>

<body> 

<div class="row">
	<h1>League of Legends</h1>
</div>

<br>

<ul>
  <li><a href="MainPage.php">Home</a></li>
  <li><a href="Champs.php">Champions</a></li>
  <li><a href="TierList.php">Tier List</a></li>
  <li><a href="items.php">Items</a></li>
  <li><a href="PatchNotes.php">Patch Notes</a></li>
  
  <?
  if(@$_SESSION["username"])
  {	
  ?>
	<li style="float:right"><a><?echo @$_SESSION["First Name"]." ";?></a></li>
	<li style="float:right"><a>Sign Out</a></li>
  <?
  }
  else 
  {
  ?>
	<li style="float:right"><a class="active" href="Login.php">Sign In</a></li>
	<li style="float:right"><a class="active" href="SignUp.php">Sign Up</a></li>
  <?
  }
  ?>
</ul>

<br>
