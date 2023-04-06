<?php

$link = mysqli_connect("localhost", "root", "", "smit");
if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $membership_id = $_POST["membership_id"];
    
    $sql = "DELETE FROM gym WHERE membershipid = $membership_id";
    if (mysqli_query($link, $sql)) {
        echo "Class deleted successfully.";
    } else {
        echo "Error deleting class: " . mysqli_error($link);
    }
}

$sql = "SELECT membershipid, pupilid FROM gym";
$result = mysqli_query($link, $sql);
?>
<html>
    <head>
            </head>
            <body bgcolor="green">

<h1>Delete Gym</h1>
<form method="post">
    <label for="membership_id">Select Membership id:</label>
    <select teacherid="membership_id" name="membership_id">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row["membershipid"]; ?>"><?php echo $row["pupilid"]; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Delete">
</form>

<?php mysqli_close($link); ?>
</body>
        </html>

