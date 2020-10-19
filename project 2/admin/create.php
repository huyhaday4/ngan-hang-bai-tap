<?php 
    require ("../includes/connect.php");
    require ("../includes/new_employee.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_create.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="header">
                <h1>New record</h1>
            </div>
            <div class="form-group col-md-5">
                <label for="name">Name<span style="color: red;"> *</span></label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <?php
                 if(count($errors) != 0){
                    echo $errors[0];
                }?>
            </div>
            <div class="form-group col-md-5">
                <label for="descript">Description</label>
                <textarea class="form-control" name="descript" id="" rows="3"></textarea>
            </div>
            <div class="form-group col-md-5">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-md-10">
                <div class="row">
                    <label for="gender" class="col-md-2">Gender</label> 
                    <div class="col-md-3">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="" value="0" checked>
                            Male
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="" value="1" >
                            Female
                            </label>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="form-group col-md-5">
            <label for="birth"></label>
            <input type="date" name="birth" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="col-md-5">
                <div class="row ">
                    <button type="submit" class="btn btn-primary" name="create">Save</button>
                    <a name="" id="" class="btn btn-primary " href="index.php" role="button">Cancel</a> 
                </div>
            </div>
        </form>            
    </div>
</body>
</html>