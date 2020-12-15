<?php


	include "../model/db_connect.php";
	 $key=$_GET["lostitem"];
	echo $key."<br>";


	echo $mysqli->host_info . "<br>";

	$sql = "SELECT item.*,found.*,founder.* FROM item JOIN found ON item.item_no = found.item_no join founder ON founder.student_id = found.student_id where item.item like '%".$key."%'";
	//$sql1 = "SELECT * FROM loser where lostitem_name like '%".$key."%'";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "item no:  " . $row["item_no"]. "<br>  description:  " . $row["description"]. "<br>item name: " . $row["item"]."<br>student id: " . $row["student_id"]."<br>found date: " . $row["date"]."<br>found place: " . $row["place"]."<br>facebook id: " . $row["fb"];
      echo "<br>email:  " . $row["mail"]."<br>phone number:". $row["phone"]."<br>comment:". $row["comment"];
		}
	} else {
		echo "0 results";
	}
	?>
