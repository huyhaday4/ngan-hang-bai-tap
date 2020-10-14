<?php
include("include/header.php");
?>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>UserId</th>
                <th>Name</th>
                <th>Description</th>
                <th>Salary</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Detail</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
        require('include/connection.php');
        include("include/function.php");
        $employees = getAllEmployees();
        foreach ($employees as $row) {
        ?>
            <tbody>
                <tr>
                    <td scope="row"><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><a href="view.php?id=<?php echo $row[0]; ?>">detail</a></td>
                    <td><a href="edit.php?id=<?php echo $row[0]; ?>">edit</a></td>
                    <td><a href="delete.php?id=<?php echo $row[0]; ?>">delete</a></td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
</body>

<?php
include("include/footer.php");
?>