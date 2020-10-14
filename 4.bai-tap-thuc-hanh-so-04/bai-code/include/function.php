<?php
function getAllEmployees()
{
    global $conn;
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($conn, $sql);
    $employee = mysqli_fetch_all($result);
    return $employee;
}

function getOneEmployee($id)
{
    global $conn;
    $sql = "SELECT * FROM employees WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $employee = mysqli_fetch_assoc($result);
    return $employee;
}

function deleteEmployee($id)
{
    global $conn;
    $sql = "DELETE FROM employees WHERE id = '$id'";
    if (mysqli_query($conn, $sql))
        return TRUE;
    else
        return FALSE;
}
