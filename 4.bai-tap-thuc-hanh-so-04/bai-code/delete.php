<?php
$id = $_GET['id'];
require("include/connection.php");
include("include/function.php");
if (deleteEmployee($id)) {
    header("Location:index.php");
    exit();
} else {
    echo "Loi gi do ...";
}
mysqli_close($conn);
