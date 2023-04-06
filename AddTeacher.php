<?php




$link = mysqli_connect("localhost", "root", "", "smit");




if ($link === false) {
 die("Connection failed: ");

}




if (isset($_POST['submit'])) {

 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 $backgroundcheck = $_POST['backgroundcheck'];
 $staffid = $_POST['staffid'];
 






 $sql = "INSERT INTO teacher (fname, lname, address, phone, backgroundcheck, staffid) VALUES ( '$fname', '$lname', '$address','$phone','$backgroundcheck','$staffid')";

 if (mysqli_query($link, $sql)) {

echo "New record created successfully";

 } else {

echo "Error adding record ";

 }

}




?>