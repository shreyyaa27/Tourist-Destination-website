<?php
//start a new session
session_start();

$page_title = "Add Destination";

require_once 'includes/header.php';
require_once 'includes/database.php';

$title = $_GET['Destination_name'];
$year = $_GET['Destination_year'];
$bio = $_GET['bio'];
$rating = $_GET['rating'];
$image =  $_GET['image'];

//define sql statement
$query_str = "INSERT INTO Destinations VALUES (NULL, '$title', '$year', '$rating', '$bio', '$image')";

//execute the query
$result = @$conn->query($query_str);

//handle error
if(!$result) {
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Insertion failed with: ($errno) $errmsg<br/>\n";
  $conn->close();
  exit;
}


header("Location: Destinations.php");
