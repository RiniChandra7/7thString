<html>
<head>
<title>All Pop Songs</title>
<link rel="stylesheet" type="text/css" href="blueprint.css">
</head>
<body background ="abcd.jpg" height="100%" width="100%">

<div style='margin-left:7.5%; margin-right:7.5%; margin-top:2%; width:84.75%; height:30%;'>
<a href='index.php'><img src="r1.png" width="100%" height="100%" style="float:center"></a>
</div>

<div class="dropdown" style="margin-left:7.5%; width:10%">
  <button class="dropbtn" style="width:100%;">Genres</button>
  <div class="dropdown-content">
    <a href="genre.php?g=1">Pop</a>
    <a href="genre.php?g=2">Rock</a>
    <a href="genre.php?g=3">Metal</a>
	<a href="genre.php?g=4">Country</a>
	<a href="genre.php?g=5">Blues</a>
	<a href="genre.php?g=6">Others</a>
  </div>
</div>
<div class="dropdown" style="margin-left:0.1%; width:15%">
  <button class="dropbtn" style="width:100%;">Using 7th String</button>
  <div class="dropdown-content">
    <a href="artist.php">Use as an artist</a>
    <a href="user.php">Use as a listener</a>
  </div>
</div>
<div class="dropdown" style="margin-left:0.1%; width:16.75%">
  <button class="dropbtn" style="width:100%;">Editors Speak</button>
  <div class="dropdown-content">
    <a href="rini.php">Rini Chandra</a>
    <a href="rohan.php">Rohan</a>
  </div>
</div>
<div class="dropdown" style="margin-left:0.1%; width:16%">
  <a href="news.php"><button class="dropbtn" style="width:100%;">In The News</button></a>
</div>
<div class="dropdown" style="margin-left:0.1%; width:15%">
  <a href="testimonies.php"><button class="dropbtn" style="width:100%;">Testimonies</button></a>
</div>
<div class="dropdown" style="margin-left:0.1%; width:10%">
  <button class="dropbtn" style="width:100%;">FAQs</button>
  <div class="dropdown-content">
    <a href="artist.php">For Artists</a>
    <a href="user.php">For Reviewers</a>
    <a href="guide.php">General guidelines</a>
	<a href="about.php">About us</a>
  </div>
</div>

<?php
	$con=mysql_connect("localhost","root","root");
	$sql=mysql_select_db('music') or die(mysql_error());
	$gen=$_GET['g'];
	switch($gen)
	{
		case 1:
		$sql="SELECT * FROM music WHERE genre='Pop'";
		break;
		case 2:
		$sql="SELECT * FROM music WHERE genre='Rock'";
		break;
		case 3:
		$sql="SELECT * FROM music WHERE genre='Metal'";
		break;
		case 4:
		$sql="SELECT * FROM music WHERE genre='Country'";
		break;
		case 5:
		$sql="SELECT * FROM music WHERE genre='Blues'";
		break;
		case 6:
		$sql="SELECT * FROM music WHERE genre='Others'";
		break;
	}
		
	$result=mysql_query($sql);
	if($result)
	{
		$row=mysql_fetch_row($result);
		echo "<table border=1 style='float:center; margin-left:7.5%; margin-top:2%; width:84.75%; color:white; 
		background-color:rgba(80,80,80,0.6); text-align:center; margin-top:2.5%; float:center'";
		echo "<tr>";
		echo "<td> <h2>Song id </h2></td>";
		echo "<td> <h2>Song name</h2> </td>";
		echo "<td> <h2>Artist</h2> </td>";
		echo "<td> <h2>Details</h2></td>";
		echo "</tr>";
		while($row)
		{
			echo "<tr>";
			echo "<td><h3>".$row[0]."</h3></td>";
			echo "<td><h3>".$row[3]."</h3></td>";
			echo "<td><h3>".$row[1]."</h3></td>";
			echo '<td><a href="song.php?id='.$row[0].'"><h3>Show more!</h3></a></td>';
			echo "</tr>";
			$row=mysql_fetch_row($result);
		}
		echo "</table>";
	}
	
	else
	{
		echo "No results found.";
	}
?>
			
</body>
</html>