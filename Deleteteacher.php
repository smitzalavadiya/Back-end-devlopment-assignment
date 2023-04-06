<?php

$link = mysqli_connect("localhost", "root", "", "smit");
if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $teacher_id = $_POST["teacher_id"];
    
    $sql = "DELETE FROM teacher WHERE teacherid = $teacher_id";
    if (mysqli_query($link, $sql)) {
        echo "Class deleted successfully.";
    } else {
        echo "Error deleting class: " . mysqli_error($link);
    }
}

$sql = "SELECT teacherid, staffid FROM teacher";
$result = mysqli_query($link, $sql);
?>
<html>
    <head>
            </head>
            <body bgcolor="green">

<h1>Delete Teacher</h1>
<form method="post">
    <label for="teacher_id">Select Class:</label>
    <select teacherid="teacher_id" name="teacher_id">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row["teacherid"]; ?>"><?php echo $row["staffid"]; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Delete">
</form>

<?php mysqli_close($link); ?>
</body>
        </html>
