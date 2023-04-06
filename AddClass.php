<?php
$link = mysqli_connect("localhost", "root", "", "smit");

if ($link === false) {
 die("Connection failed: ");

}


if (isset($_POST['submit'])) {

 $teacherid = $_POST['teacherid'];
 $capacity = $_POST['capacity'];
 $classname = $_POST['classname'];

 
 

 $sql = "INSERT INTO class ( teacherid, capacity, classname) VALUES ( '$teacherid', '$capacity','$classname')";

 if (mysqli_query($link, $sql)) {

echo "New record created successfully";

 } else {

echo "Error adding record ";

 }

}

?>