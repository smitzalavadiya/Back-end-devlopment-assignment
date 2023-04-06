<?php

$link = mysqli_connect("localhost", "root", "", "smit");
if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $parents_id = $_POST["parents_id"];
    
    $sql = "DELETE FROM parents WHERE parentsid = $parents_id";
    if (mysqli_query($link, $sql)) {
        echo "Class deleted successfully.";
    } else {
        echo "Error deleting class: " . mysqli_error($link);
    }
}

$sql = "SELECT parentsid, pupilid FROM parents";
$result = mysqli_query($link, $sql);
?>
<html>
    <head>
            </head>
            <body bgcolor="green">

<h1>Delete Class</h1>
<form method="post">
    <label for="parents_id">Select Parents:</label>
    <select parentsid="parents_id" name="parents_id">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row["parentsid"]; ?>"><?php echo $row["pupilid"]; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Delete">
</form>

<?php mysqli_close($link); ?>
</body>
        </html>
