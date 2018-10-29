<?php
	include 'connection.php';
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$type = $_POST['typeofcase'];
	$dt = $_POST['date'];
	$date = date('Y-m-d',strtotime($dt));
	$treatment = $_POST['treatment'];
	$temp = 0;
	$sql = "insert into bookapp(name,phone,date,treatment,toc) 
			VALUES('$name','$phone','$date','$treatment','$temp')";
	if(mysqli_query($link,$sql))
	{
		//echo "new record created successfully";
		header("location:index.html");
	}
	else
	{
		echo "Error : ".mysqli_error($link);
	}
?>