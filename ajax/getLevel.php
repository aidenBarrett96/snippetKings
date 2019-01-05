<?php

if(isset($_POST['level'])) {
	
 $level = $_POST['level']; //Retrieve username from POST data

	 
 $user = "root";
 $pass = ""; 
 
 $conn = new MySQLi("localhost", $user, $pass, "snippet_kings");
 if($conn->connect_error) {
	die("Connection failed: " .$conn->connect_errno); 
 }
 $sql = "SELECT * FROM song_details WHERE songID = ".$level;
 $result = $conn->query($sql);
  $jsonReply = array();
 if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$title = $row['title'];	$artist=$row['artist'];	$album=$row['album'];	$lyric=$row['lyric'];	$start=$row['snippetStart'];	$finish=$row['snippetEnd'];
	}

	 $jsonReply['title'] = $title;
	 $jsonReply['artist'] = $artist;
	 $jsonReply['album'] = $album;
	 $jsonReply['lyric'] = $lyric;
	 $jsonReply['start'] = $start;
	 $jsonReply['finish'] = $finish;
	 header('Content-Type:application/json;');
	 echo json_encode($jsonReply); //Encode the array to JSON
}
 else {
	$jsonReply['error'] = "An error has occured. Please try again."; 
	header('Content-Type:application/json;');
	echo json_encode($jsonReply); //Encode the array to JSON
 }
}
 
 
 
?>
