<?php
	include 'connection.php';
	$name = $_POST["name"];
	$ph = $_POST["phone"];
	$pass = $_POST["pass1"];
	$city = $_POST["city"];
	$sql = "SELECT phone FROM login";
	$result = mysqli_query($link,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while(mysqli_fetch_assoc($result))
		{
			if($row["phone"] == $ph)
			{
				echo "user already exists";
			}
		}
	}
	else
	{
		echo "nothing is fetched..";
	}
	$sql1 = "INSERT INTO login(name,pass,phone,city) VALUES('$name','$pass','$ph','$city')";
	if(mysqli_query($link,$sql1))
	{
		echo "you are successfully registered.....";
	}
	else
	{
		echo "query is not executed";
	}
?>