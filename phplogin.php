<?php
	include "connection.php";
	$ph = $_POST["phone"];
	$pass = $_POST["password"];
	$sql = "SELECT phone,pass FROM login;";
	$result = mysqli_query($link,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while ($row = mysqli_fetch_assoc($result)) 
		{
			if($row["phone"] == $ph && $row["pass"] == $pass)
			{
				echo "<br>login successful....";
			}	
			
		}
	}
	else
	{
		echo "<br>no result is fetched";
	}

?>