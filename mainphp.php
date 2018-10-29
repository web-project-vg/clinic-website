<?php
	$link = mysqli_connect("localhost","root","","wt-project");
	if(!$link)
	{
		die("could not connect".mysqli_error());
	}
	else
	{
		echo "yess";
	}
	mysqli_close($link);
?>