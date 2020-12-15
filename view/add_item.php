<?php

//as we include db_connect.php file it's variable can be used in this file
	include "../model/db_connect.php";

	$conn = mysqli_connect($host, $username, $user_pass, $database_in_use);

	if (mysqli_connect_errno()) {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	exit();
	}

	$name=$_GET["name"];
	 $id=$_GET["ID"];
	 $fb=$_GET["fb"];
	 $mail=$_GET["mail"];
	 $phone=$_GET["phone"];
	 $date=$_GET["lostDate"];
	 $place=$_GET["lostPlace"];
	 $item=$_GET["itemName"];
	 $des=$_GET["description"];
	 $comment=$_GET["comment"];
	 $f=0;


	//echo $key."<br>";
	//echo $mysqli->host_info . "<br>";

	$sql1 = "INSERT INTO loser VALUES ('$id', '$name' ,'$fb' , '$mail' , '$phone' , '$comment')";
	$sql2 = "INSERT INTO  item VALUES (NULL,'$des' , '$item')";
	$sql3 = "INSERT INTO  lost VALUES ('$id',NULL,'$date','$place')";
	$sql4 = "UPDATE lost SET item_no=(SELECT item_no from item where description='$des' ) where student_id='$id'";

	$result1 = $mysqli->query($sql1);
	$result2 = $mysqli->query($sql2);
	$result3=$mysqli->query($sql3);
	$result4=$mysqli->query($sql4);

	if ($result1 && $result2 && $result3 && $result4) {
	  echo "Record updated successfully";
	} else {
	  echo "Error updating record: " . mysqli_error($conn);
		$sql5 = "DELETE FROM item WHERE description='$des'";
		$sql6 = "DELETE FROM loser WHERE student_id='$id'";
		$result5 = $mysqli->query($sql5);
		$result6 = $mysqli->query($sql6);

	}
  // Free result set
  //$result -> free_result();

	//include "search_all.php";
	?>
