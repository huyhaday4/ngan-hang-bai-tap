<?php 
        $id = $_GET['id'];
        include ("../includes/connect.php");
        include ("../includes/functions.php");
        deleteEmp($id);
        
        header("Location:index.php");
?>