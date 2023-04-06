<?php




$link = mysqli_connect("localhost", "root", "", "smit");




if ($link === false) {
 die("Connection failed: ");

}




if (isset($_POST['submit'])) {

 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $gender = $_POST['gender'];
 $position = $_POST['position'];
 $phone = $_POST['phone'];
 $teacherid = $_POST['teacherid'];
 






 $sql = "INSERT INTO staff (fname, lname, gender, position, phone, teacherid) VALUES ( '$fname', '$lname', '$gender','$position','$phone','$teacherid')";

 if (mysqli_query($link, $sql)) {

echo "New record created successfully";

 } else {

echo "Error adding record ";

 }

}




?>