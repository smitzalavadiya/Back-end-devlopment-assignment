<?php

$link = mysqli_connect("localhost", "root", "", "smit");
if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $class_id = $_POST["class_id"];
    
    $sql = "DELETE FROM class WHERE classid = $class_id";
    if (mysqli_query($link, $sql)) {
        echo "Class deleted successfully.";
    } else {
        echo "Error deleting class: " . mysqli_error($link);
    }
}

$sql = "SELECT classid, teacherid FROM class";
$result = mysqli_query($link, $sql);
?>
<html>
    <head>
            </head>
            <body bgcolor="green">

<h1>Delete Class</h1>
<form method="post">
    <label for="class_id">Select Class:</label>
    <select classid="class_id" name="class_id">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row["classid"]; ?>"><?php echo $row["teacherid"]; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Delete">
</form>

<?php mysqli_close($link); ?>
        </body>
        </html>
