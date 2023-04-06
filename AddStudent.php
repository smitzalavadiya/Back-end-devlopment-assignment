<?php




$link = mysqli_connect("localhost", "root", "", "smit");




if ($link === false) {
 die("Connection failed: ");

}




if (isset($_POST['submit'])) {

 $parentsid = $_POST['parentsid'];
 $classid = $_POST['classid'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $medicalinfo = $_POST['medicalinfo'];






 $sql = "INSERT INTO pupil (parentsid, classid, fname, lname, medicalinfo) VALUES ('$parentsid', '$classid', '$fname', '$lname', '$medicalinfo')";

 if (mysqli_query($link, $sql)) {

echo "New record created successfully";

 } else {

echo "Error adding record ";

 }

}




?>