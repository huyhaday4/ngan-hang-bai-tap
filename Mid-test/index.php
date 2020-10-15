<?php
include("Includes/header.php");
?>

<body>
    <h1>DANH SACH LOP HOC</h1>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Ma Lop">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Ten Lop">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Ma lop</th>
                <th>Ten lop hoc</th>
                <th>Giao vien</th>
                <th>Lich hoc</th>
                <th>Hoc phi</th>
                <th>Sua</th>
                <th>Xoa</th>
            </tr>
        </thead>
        <?php
        require('Includes/Connection.php');
        include("Includes/Functions.php");
        $class = getAllClasses();
        foreach ($class as $row) {
        ?>
            <tbody>
                <tr>
                    <td scope="row"><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><a href="edit.php?MaLop=<?php echo $row[0]; ?>">edit</a></td>
                    <td><a href="delete.php?MaLop=<?php echo $row[0]; ?>">delete</a></td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
</body>

<?php
include("Includes/footer.php");
?>