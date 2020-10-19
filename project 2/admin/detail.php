<?php 
    include ("../includes/connect.php");
    include ("../includes/functions.php");

    $id = $_GET['id'];
    $employ = getOneEmp($id);
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
        <h1 style="margin: 30px 0;">View Record</h1>
        <div class="form-group row col-md-8">
            <label for="" class="col-md-3 col-form-label">ID</label>
            <input type="text" name="" id="" class="form-control col-md-5" placeholder="<?php echo $employ['id'] ?>" disabled>
        </div>
        <div class="form-group row col-md-8">
            <label for="" class="col-form-label col-md-3">Name</label>
            <input type="text" name="" id="" class="form-control col-md-5" placeholder="<?php echo $employ['name'] ?>"  disabled>
        </div>
        <div class="form-group row col-md-8">
            <label for="" class="col-form-label col-md-3">Description</label>
            <input type="text" name="" id="" class="form-control col-md-5" placeholder="<?php echo $employ['description'] ?>"  disabled>
        </div>
        <div class="form-group row col-md-8">
          <label for="" class="col-form-label col-md-3">Salary</label>
          <input type="text" name="" id="" class="form-control col-md-5" placeholder="<?php echo $employ['salary'] ?>"  disabled>
        </div>
        <?php 
            if($employ['gender'] == 0){
        ?>
        <div class="form-group row col-md-8">
          <label for="" class="col-form-label col-md-3">Gender</label>
          <input type="text" name="" id="" class="form-control col-md-5" placeholder="Nam"  disabled>
        </div>
        <?php 
            } else{
        ?>
        <div class="form-group row col-md-8">
          <label for="" class="col-form-label col-md-3">Gender</label>
          <input type="text" name="" id="" class="form-control col-md-5" placeholder="Nữ"  disabled>
        </div>
        <?php } ?>
        <div class="form-group row col-md-8">
          <label for="" class="col-form-label col-md-3">Birthday</label>
          <input type="text" name="" id="" class="form-control col-md-5" placeholder="<?php echo $employ['birthday'] ?>"  disabled>
        </div>
        <div class="form-group row col-md-8">
          <label for="" class="col-form-label col-md-3">Created at</label>
          <input type="text" name="" id="" class="form-control col-md-5" placeholder="<?php echo $employ['created_at'] ?>"  disabled>
        </div>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Back</a>
    </div>
</body>
</html>