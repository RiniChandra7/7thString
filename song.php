<html>
<head>
<title>Song details</title>
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
	$id=$_GET['id'];
	$sql="SELECT * FROM music WHERE id=".$id;
	$result=mysql_query($sql);
	if($result)
	{
		$row=mysql_fetch_row($result);
		echo "<div style='margin-left:7.5%; margin-right:7.5%; margin-top:2%; width:84.75%; height:30%;'>
		<span style='color: #ffffff;
	font-family: Monospace;
	text-shadow: 1.5px 1.5px 3px red;
	font-size: 20px;
    margin-left: 20px;'>Song id:</span> &nbsp<span class='content'>".$row[0]."</span><br>";
		echo "<span style='color: #ffffff;
	font-family: Monospace;
	text-shadow: 1.5px 1.5px 3px red;
	font-size: 20px;
    margin-left: 20px;'>Song name:</span> &nbsp<span class='content'>".$row[3]."</span><br>";
		echo "<span style='color: #ffffff;
	font-family: Monospace;
	text-shadow: 1.5px 1.5px 3px red;
	font-size: 20px;
    margin-left: 20px;'>Genre:</span> &nbsp<span class='content'>".$row[2]."</span><br>";
		echo "<span style='color: #ffffff;
	font-family: Monospace;
	text-shadow: 1.5px 1.5px 3px red;
	font-size: 20px;
    margin-left: 20px;'>Description:</span> &nbsp<span class='content'".$row[5]."</span><br>";
		echo "<span style='color: #ffffff;
	font-family: Monospace;
	text-shadow: 1.5px 1.5px 3px red;
	font-size: 20px;
    margin-left: 20px;'>Song link:</span><a class='content' target='_blank' href='../Music/'".$row[4].">&nbsp Listen!</a><br><br>";
		if($row[6]!=null)
			echo "<span style='color: #ffffff;
	font-family: Monospace;
	text-shadow: 1.5px 1.5px 3px red;
	font-size: 20px;
    margin-left: 20px;'>Guitar:</span><br>".$row[6]."<br><br>";
		if($row[7]!=null)
			echo "<span style='color: #ffffff;
	font-family: Monospace;
	text-shadow: 1.5px 1.5px 3px red;
	font-size: 20px;
    margin-left: 20px;'>Piano:</span><br>".$row[7]."<br><br>";
		if($row[8]!=null)
			echo "<span style='color: #ffffff;
	font-family: Monospace;
	text-shadow: 1.5px 1.5px 3px red;
	font-size: 20px;
    margin-left: 20px;'>Drums:</span><br>".$row[8]."<br><br>";
		echo "<a href='review.php?id=".$id."' target='_new'> <h1>See reviews!</h1></a></div>";
	}
	else
	{
		echo "No results found.";
	}
?>


</body>
</html>