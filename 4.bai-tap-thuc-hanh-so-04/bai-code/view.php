<?php
require('include/connection.php');
include("include/function.php");
$user_id = $_GET['id'];
$employee = getOneEmployee($user_id);
include("include/header.php");
?>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="txtUserId">UserId</label>
                        <input type="text" class="form-control" name="txtUserId" id="txtUserId" value="<?php echo $employee['id']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtName">Name</label>
                        <input type="text" class="form-control" name="txtName" id="txtName" value="<?php echo $employee['name']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtDescription">Description</label>
                        <input type="text" class="form-control" name="txtDescription" id="txtDescription" value="<?php echo $employee['description']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtSalary">Salary</label>
                        <input type="text" class="form-control" name="txtSalary" id="txtSalary" value="<?php echo $employee['salary']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtGender">Gender</label>
                        <br>
                        <input type="radio" class="gender" checked="">
                        <label for="txtGender">Male</label>
                        <input type="radio" class="gender">
                        <label for="txtGender">Female</label>
                    </div>

                    <div class="form-group">
                        <label for="txtBirthday">Birthday</label>
                        <input type="text" class="form-control" name="txtBirthday" id="txtBirthday" value="<?php echo $employee['birthday']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtCreatedAt">Created At</label>
                        <input type="text" class="form-control" name="txtCreatedAt" id="txtCreatedAt" value="<?php echo $employee['created_at']; ?>">
                    </div>

                    <div class="form-group">
                        <button type="back" class="bg-light " name="btnBack" id="btnBack">
                            <a class="btnBack" href="index.php">back</a>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </main>
</body>

<?php
include("include/footer.php");
?>