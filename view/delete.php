<?php


	include "../model/db_connect.php";
	 $idnum=$_GET["idnumber"];



	echo $mysqli->host_info . "<br>";

	$sql = "DELETE FROM lostfound WHERE item_id=$idnum;";
	$result = $mysqli->query($sql);

	include "search_all.php";




	?>
