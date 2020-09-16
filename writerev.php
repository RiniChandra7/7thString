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
$id=$_GET['id'];
echo "<form action='rev.php?id=".$id."' method='POST'>
<div style=\"background-color:rgba(80,80,80,0.6); text-align:center; width:350px; height:50%; margin-top:20px; margin-left:35%; width:29.75%; float:center;\">
				<font style=\"color:rgb(237,193,171); font-family:copperplate gothic light; font-size:1.5em; text-align:left\">
					<br>
					<u><b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp REVIEW</b></u>
				</font>
				<font style='color:red'>
				<br> 
				<br>
					Name:  &nbsp &nbsp &nbsp <input type=\"text\" name=\"nm\" style=\"height:25px; border-radius:5px;padding-left:10px\" placeholder=\"Name\" required=\"true\">
				<br> <Br>
					Review:  &nbsp &nbsp <textarea name=\"review\" style=\"border-radius:5px;padding-left:10px\" placeholder=\"Your review here...\" rows=\'5\' cols=\'22\' required=\"true\"></textarea>
				<br><br>
					Rating(/5):  <input type=\"number\" name=\"rate\" style=\"height:25px; border-radius:5px; padding-left:10px\" placeholder=\"Rating\" required=\"true\">
				<br><br>
					<input type=\"submit\" value=\"Submit!\"
					style=\"background-color:#730000; border:none; color:white; font-family:georgia; font-size:1em; border-radius:5px; height:25px; width:90px;\">
				</font>
</form>";
?>
</body>
</html>
	