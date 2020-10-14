<?php
include("include/header.php")
?>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <h1>Create Record</h1>

                    <div class="form-group">
                        <label for="txtName">Name</label>
                        <input type="text" class="form-control" name="txtName" id="txtName">
                    </div>

                    <div class="form-group">
                        <label for="txtDescription">Description</label>
                        <input type="text" class="form-control" name="txtDescription" id="txtDescription">
                    </div>

                    <div class="form-group">
                        <label for="txtSalary">Salary</label>
                        <input type="text" class="form-control" name="txtSalary" id="txtSalary">
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
                        <input type="date" class="form-control" value="2020-10-15" min="1000-01-01" max="3000-12-31">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="bg-success text-white" name="btnSave" id="btnSave">
                            Save
                        </button>
                        <button type="cancel" class="bg-light " name="btnCancel" id="btnCancel">
                            <a class="btnBack" href="index.php">Cancel</a>
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