<?php
	$con=mysql_connect("localhost","root","root");
	$sql=mysql_select_db('reviews') or die(mysql_error());
	$name=$_POST['nm'];
	$rev=$_POST['review'];
	$rate=$_POST['rate'];
	$id=$_GET['id'];
	$sql="SELECT * FROM reviews WHERE name=".$name." AND id=".$id;
	$result=mysql_query($sql);
	if($result)
	{
		echo "Your review already exists!";
	}
	else
	{
		if($rate<=0 || $rate>5)
			echo "Invalid rating!";
		else
		{
			$sql="INSERT INTO `reviews`.`reviews` (`id`, `song_id`, `review`, `name`, `rating`) VALUES (NULL, '$id', '$rev', '$name', '$rate')";
			if(mysql_query($sql))
				header('location:success.php');
		}
	}
?>
