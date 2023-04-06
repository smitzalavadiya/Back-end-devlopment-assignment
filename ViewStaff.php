<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <style>
            /* Body styles */
            body {
              font-family: Arial, Helvetica, sans-serif;
              background-color: #f5f5f5;
            }
          
            /* Form styles */
            form {
              margin: 50px auto;
              width: 50%;
              padding: 20px;
              background-color: #1db32a;
              box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
              border-radius: 5px;
            }
          
            label {
              display: block;
              margin-bottom: 10px;
              font-size: 18px;
              font-weight: bold;
              color: #555;
            }
          
            input[type="text"] {
              width: 100%;
              padding: 10px;
              font-size: 16px;
              border-radius: 3px;
              border: 1px solid #ccc;
              box-sizing: border-box;
              margin-bottom: 20px;
            }
          
            input[type="submit"] {
              background-color: #00ff08;
              color: #070707;
              padding: 10px 20px;
              font-size: 16px;
              border: none;
              border-radius: 3px;
              cursor: pointer;
            }
          
            input[type="submit"]:hover {
              background-color: #00fa08;
            }
          
            /* Navbar styles */
            .navbar {
              overflow: hidden;
              background-color: #c3d427;
            }
          
            .navbar a {
              float: left;
              font-size: 20px;
              color: rgb(29, 9, 9);
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }
          
            .dropdown {
              float: left;
              overflow: hidden;
            }
          
            .dropdown .dropbtn {
              font-size: 20px;
              border: none;
              outline: none;
              color: rgb(14, 10, 10);
              padding: 14px 16px;
              background-color: inherit;
              font-family: inherit;
              margin: 0;
            }
          
            .navbar a:hover,
            .dropdown:hover .dropbtn {
              background-color: rgb(160, 255, 7);
            }
          
            .dropdown-content {
              display: none;
              position: absolute;
              background-color: #85a109;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(235, 102, 102, 0.2);
              z-index: 1;
            }
          
            .dropdown-content a {
              float: none;
              color: rgb(56, 27, 27);
              padding: 12px 16px;
              text-decoration: none;
              display: block;
              text-align: left;
            }
          
            .dropdown-content a:hover {
              background-color: #d1ff03;
            }
          
            .dropdown:hover .dropdown-content {
              display: block;
            }
          </style>
          
      
    </head>
    <body>
        <div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="ViewStudent.php">Student</a>
                    <a href="ViewParent.php">Parent</a>
                    <a href="ViewTeacher.php">Teacher</a>
                    <a href="ViewClass.php">Class</a>
                    <a href="ViewStaff.php">Staff</a>
                    <a href="ViewGym.php">Gym</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="AddStudent.html">Student</a>
                    <a href="AddParent.html">Parent</a>
                    <a href="AddTeacher.html">Teacher</a>
                    <a href="AddClass.html">Class</a>
                    <a href="AddStaff.html">Staff</a>
                    <a href="AddGym.html">Gym</a>
                </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="Deletestudent.php">Student</a>
                  <a href="Deleteparent.php">Parent</a>
                  <a href="Deleteteacher.php">Teacher</a>
                  <a href="Deleteclass.php">Class</a>
                  <a href="Deletestaff.php">Staff</a>
                  <a href="Deletegym.php">Gym</a>
              </div>
          </div>
            <a href="Contact.html">Contact Us</a>
        </div>

<body> 

<?php


$link = mysqli_connect("localhost", "root", "", "smit");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Staff ID<br><hr></th>
				<th width="250px">First name<br><hr></th>
				<th width="250px">Last Name<br><hr></th>
				<th width="250px">Gender<br><hr></th>
                <th width="250px">Position<br><hr></th>
				<th width="250px">Phone <br><hr></th>
                <th width="250px">Teacher id <br><hr></th>
				
				

			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT `staffid`, `fname`, `lname`, `gender`, `position`, `phone`, `teacherid` FROM `staff` ");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['staffid']}</th>
				<th>{$row['fname']}</th>
				<th>{$row['lname']}</th>
				<th>{$row['gender']}</th>
				<th>{$row['position']}</th>
				<th>{$row['phone']}</th>
                <th>{$row['teacherid']}</th>
				
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

