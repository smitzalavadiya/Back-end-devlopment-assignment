<?php




$link = mysqli_connect("localhost", "root", "", "smit");


  

if ($link === false) {
 die("Connection failed: ");

}




if (isset($_POST['submit'])) {

 $pupilid = $_POST['pupilid'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 
 






 $sql = "INSERT INTO parents ( pupilid, fname, lname, email, address, phone) VALUES ( '$pupilid', '$fname', '$lname', '$email', '$address','$phone')";

 if (mysqli_query($link, $sql)) {

echo "New record created successfully";

 } else {

echo "Error adding record ";

 }

}




?>