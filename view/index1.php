<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>lost and found</title>
	<link rel="stylesheet" href="style1.css" />
</head>
<body>
	<div id="wrapper">
		<div id="heading1">
			<h2>Lost and found management of BRACU</h2>
		</div>

		<?php
		include "../model/db_connect.php";


		//include "search_all.php";
		?>


			<div id="first1">
				<h2>Lost something?</h2>
				<a href="#search">Search here</a>
			</div>
			<div id="first2">
				<h2>Found something?</h2>
				<a href="#search2">Click to see if anybody lost it</a>
			</div>
			<div id="first3">
				<h2>Add a record of what have you lost</h2>
				<a href="#add">add here</a>
			</div>

			<div id="first4">
				<h2>If you found something add record here</h2>
				<a href="#add2">Click to add</a>
			</div>
			<div id="first5"></div>
			<div id="first6"></div>

		<div id="search">
			<form action="search2.php">
			  <label for="fname">What item did you lost:</label><br><br>

			  <input  type="text" id="lostItem" placeholder="see if anybody found it" name="lostitem" ><br><br><br>

			  <input type="submit" value="Search">
			  <input type="reset">
			</form>
		</div>

		<div id="add">
		<h2>You lost something? Add a record here</h2>

		<form action="add_item.php">
		  <input type="text" id="lostitem" name="name" placeholder="Your name"><br>

			<input type="text" id="lostitem" name="ID" placeholder="Your student ID"><br>

			<input type="text" id="lostitem" name="fb"placeholder="Your facebook ID" ><br>

		  <input type="text" id="lostitem" name="mail" placeholder="Your Mail Address"><br>

		  <input type="text" id="lostitem" name="phone" placeholder="Your phone number"><br>

			<input type="text" id="lostitem" name="lostDate" placeholder="Which date did you lost YY/MM/DD"><br>

			<input type="text" id="lostitem" name="lostPlace" placeholder="Where did you lost?"><br>

		  <input type="text" id="lostitem" name="itemName" placeholder="What item did you lost?" ><br>

			<input type="text" id="lostitem" name="description" placeholder="Describe your lost item" ><br>

			<input type="text" id="lostitem" name="comment" placeholder="Add a comment" ><br>

			<input type="submit" value="Submit">
		  <input type="reset">
		  <!--
			<label for="fname">Type your ID</label><br>
		  <input type="number" id="lostitem" name="id" placeholder="Type your ID"><br>
		-->
		</form>
	</div>

	<div id="search2">
		<form action="search.php">
			<label for="fname">What item have you found:</label><br><br>

			<input  type="text" id="lostItem" placeholder="see if anybody lost it" name="lostitem" ><br><br><br>

			<input type="submit" value="Search">
			<input type="reset">
		</form>
	</div>

	<div id="add2">
	<h2>You found something? Add a record here</h2>

	<form action="add_item2.php">
		<input type="text" id="founditem" name="name" placeholder="Your name"><br>

		<input type="text" id="founditem" name="ID" placeholder="Your student ID"><br>

		<input type="text" id="founditem" name="fb"placeholder="Your facebook ID" ><br>

		<input type="text" id="founditem" name="mail" placeholder="Your Mail Address"><br>

		<input type="text" id="founditem" name="phone" placeholder="Your phone number"><br>

		<input type="text" id="founditem" name="foundDate" placeholder="Which date did you found YY/MM/DD"><br>

		<input type="text" id="founditem" name="foundPlace" placeholder="Where did you found your item?"><br>

		<input type="text" id="founditem" name="itemName" placeholder="What item did you found?" ><br>

		<input type="text" id="founditem" name="description" placeholder="Describe your item" ><br>

		<input type="text" id="founditem" name="comment" placeholder="Add a comment" ><br>

		<input type="submit" value="Submit">
		<input type="reset">
		<!--
		<label for="fname">Type your ID</label><br>
		<input type="number" id="lostitem" name="id" placeholder="Type your ID"><br>
	-->
	</form>
	</div>


		<?php
		//include "search.php";
		$mysqli->close();
		?>
	</div>
</body>
</html>
