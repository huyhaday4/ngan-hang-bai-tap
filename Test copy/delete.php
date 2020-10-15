<?php
$MaLop = $_GET['MaLop'];
require("Includes/Connection.php");
include("Includes/Functions.php");
if (deleteClass($MaLop)) {
    header("Location:index.php");
    exit();
} else {
    echo "Loi gi do ...";
}
mysqli_close($conn);
