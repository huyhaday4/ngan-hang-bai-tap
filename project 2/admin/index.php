<?php 
     include ("../includes/connect.php");
     include ("../includes/functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="container">
                <div class="row">
                    <h1>Employees list</h1>
                    <a name="" id="" class="btn btn-primary btn_create" href="create.php" role="button">Add new employees</a>
                </div>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $employees = getAllEmp();
                    foreach ($employees as $employ){
                        $id = $employ[0];
                ?>
                <tr>
                    <td><?php echo $employ[0] ?></td>
                    <td><?php echo $employ[1] ?></td>
                    <td><?php echo $employ[2] ?></td>
                    <td><?php echo $employ[3] ?></td>
                    <td>
                        <?php    
                            if($employ[4] == 0){?>
                                Nam
                        <?php }
                            else{ ?>
                                Nữ
                        <?php } ?>
                    </td>
                    <td><?php echo $employ[5] ?></td>
                    <td><?php echo $employ[6] ?></td>
                    <td><a href="detail.php?id=<?php echo $employ[0] ?>">Xem</a></td>
                    <td><a href="edit.php?id=<?php echo $employ[0] ?>">Sửa</a></td>
                    <td><a href="delete.php?id=<?php echo $id ?>">Xoá</a></td>                    
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>