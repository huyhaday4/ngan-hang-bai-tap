<?php 
    include ("../includes/connect.php");
    include ("../includes/functions.php");
    $id = $_GET['id'];
    $employ = getOneEmp($id);
    $error = "";

    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $des = $_POST['descript'];
        $salary = $_POST['salary'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birth'];
        if(empty($name)){
            $error = "Name khong duoc trong";
        }
        else{
            updateEmp($id, $name, $des, $salary, $gender, $birthday);
            header("Location:index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 style="margin-bottom: 30px;">Update Record</h1>
        <p>Please edit the input values and submit to update record</p>
        <form action="" method="POST">
            <div class="form-group col-md-5">
              <label for="name">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="<?php echo $employ['name'] ?>" aria-describedby="helpId">
            </div>
            <?php 
                echo $error;
            ?>
            <div class="form-group col-md-5">
              <label for="descript">Description</label>
              <input type="text" name="descript" id="" class="form-control" placeholder="<?php echo $employ['description'] ?>" aria-describedby="helpId">
            </div>
            <div class="form-group col-md-5">
              <label for="salary">Salary</label>
              <input type="text" name="salary" id="" class="form-control" placeholder="<?php echo $employ['salary'] ?>" aria-describedby="helpId">
            </div>
            <div class="form-group col-md-5">
              <div class="row">
                <label for="gender">Gender</label>
              </div>
              <?php 
                if($employ['gender'] == 0){
              ?>
              <div class="form-check">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="gender" id="" value="0" checked>
                  Nam
                </label>
              </div>
              <div class="form-check">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="gender" id="" value="1">
                  Nữ
                </label>
              </div>
                <?php }
                    else {
                ?>
                <div class="form-check">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="gender" id="" value="0">
                  Nam
                </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="gender" id="" value="1" checked>
                  Nữ
                </label>
                </div>
                <?php }?>
            </div>
            <div class="form-group col-md-5">
              <label for="birth">Birthday</label>
              <input type="date" name="birth" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Save</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancel</a>
        </form>
    </div>
</body>
</html>