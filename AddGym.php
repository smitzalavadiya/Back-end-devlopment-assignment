<?php




$link = mysqli_connect("localhost", "root", "", "smit");




if ($link === false) {
 die("Connection failed: ");

}




if (isset($_POST['submit'])) {

 $pupilid= $_POST['pupilid'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $gender = $_POST['gender'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 
 

 $sql = "INSERT INTO gym ( pupilid, fname, lname, gender, email, phone) VALUES ( '$pupilid', '$fname', '$lname', '$gender', '$email', '$phone')";

 
if (mysqli_query($link, $sql)) {

    echo "New record created successfully";
    
     } else {
    
    echo "Error adding record ";
    
     }
    
    }
    



?>