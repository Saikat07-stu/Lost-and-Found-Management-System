<?php


	include "../model/db_connect.php";
	 $key=$_GET["lostitem"];
	echo $key."<br>";


	echo $mysqli->host_info . "<br>";

	$sql = "SELECT item.*,lost.*,loser.* FROM item JOIN lost ON item.item_no = lost.item_no join loser ON loser.student_id = lost.student_id where item.item like '%".$key."%'";
	//$sql1 = "SELECT * FROM loser where lostitem_name like '%".$key."%'";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "item no:  " . $row["item_no"]. "<br>  description:  " . $row["description"]. "<br>item name: " . $row["item"]."<br>student id: " . $row["student_id"]."<br>lost date: " . $row["date"]."<br>lost place: " . $row["place"]."<br>facebook id: " . $row["fb"];
      echo "<br>email:  " . $row["mail"]."<br>phone number:". $row["phone"]."<br>comment:". $row["comment"];
		}
	} else {
		echo "0 results";
	}
	?>
