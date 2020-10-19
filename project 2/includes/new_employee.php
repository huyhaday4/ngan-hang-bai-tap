<?php 
    $errors = array();


    if(isset($_POST['create'])){
        $name = $_POST['name'];
        $des = $_POST['descript'];
        $salary = $_POST['salary'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birth'];
    }
  
        
    if(empty($name)){
        array_push($errors, "Name không được để trống");
    }
    else{
        $sql = "INSERT INTO employees (name, description, salary, gender, birthday) VALUES
                ('$name', '$des', '$salary', '$gender', '$birthday')";
        mysqli_query($conn, $sql);
        header("Location:../admin/index.php");
    }

    
?>