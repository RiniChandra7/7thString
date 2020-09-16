<html>
<head>
<title>Song reviews</title>
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
	$sql=mysql_select_db('reviews') or die(mysql_error());
	$count=-1;
	$sum=0.0;
	$id=$_GET['id'];
	$sql="SELECT * FROM reviews WHERE song_id=".$id;
	$result=mysql_query($sql);
	if($result)
	{
		$row=mysql_fetch_row($result);
		
		echo "<h2 style='margin-left:7.5%'>Reviews:</h2>";
		echo "<table border=1 style='margin-left:7.5%; width:84.75%; color:white; background-color:rgba(80,80,80,0.6);'>";
		while($row)
		{
			echo "<tr><td>";
			echo "<span class='content'> Review id: #".$row[0]."<br>";
			echo "Reviewer: ".$row[3]."<br>";
			echo "Review: ".$row[2]."<br>";
			echo "Rating: ".$row[4]." out of 5<br></span>";
			echo "</tr></td>";
			$row=mysql_fetch_row($result);
		}
		echo "</table> <br>";
		$sql="SELECT * FROM reviews WHERE song_id=".$id;
		$result=mysql_query($sql);
		if($result)
		{
			$row=mysql_fetch_row($result);
			$count++;
			$sum+=$row[4];
			while($row)
			{
				$row=mysql_fetch_row($result);
				$count++;
				$sum+=$row[4];
			}
		}
		if($count==0)
			$count=1;
		$avg=$sum/$count;
		echo "<h2 style='margin-left:7.5%;'>Average rating: ".$avg."</h2>";
		echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='writerev.php?id=".$id."'>
		<h2 style='margin-left:7.5%'> Write your own review!</h2></a>";
	}
	else
	{
		echo "No result found!";
	}
?>
</body>
</html>