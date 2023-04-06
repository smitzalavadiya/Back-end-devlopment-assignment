<?php

$link = mysqli_connect("localhost", "root", "", "smit");
if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $staff_id = $_POST["staff_id"];
    
    $sql = "DELETE FROM staff WHERE staffid = $staff_id";
    if (mysqli_query($link, $sql)) {
        echo "Class deleted successfully.";
    } else {
        echo "Error deleting class: " . mysqli_error($link);
    }
}

$sql = "SELECT staffid, teacherid FROM staff";
$result = mysqli_query($link, $sql);
?>
<html>
    <head>
            </head>
            <body bgcolor="green">

<h1>Delete Staff</h1>
<form method="post">
    <label for="staff_id">Select staff member:</label>
    <select teacherid="staff_id" name="staff_id">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row["staffid"]; ?>"><?php echo $row["teacherid"]; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Delete">
</form>

<?php mysqli_close($link); ?>
</body>
        </html>
