<?php 
    function getAllEmp(){
        global $conn;
        $sql = "SELECT * FROM employees";
        $result = mysqli_query($conn, $sql);
        $employ = mysqli_fetch_all($result);
        return $employ;
    }

    function getOneEmp($id){
        global $conn;
        $sql = "SELECT * FROM employees WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $employ = mysqli_fetch_assoc($result);
        return $employ;
    }

    function deleteEmp($id){
        global $conn;
        $sql = "DELETE FROM employees WHERE id='$id'";
        mysqli_query($conn, $sql);
    }

    function updateEmp($id, $name, $des, $salary, $gender, $birthday){
        global $conn;
        $sql = "UPDATE employees SET name='$name', description='$des', salary='$salary',
            gender='$gender', birthday='$birthday' WHERE id='$id'";
        mysqli_query($conn, $sql);
    }
?>