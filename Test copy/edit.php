<?php
require('Includes/Connection.php');
include("Includes/Functions.php");
$MaLop = $_GET['MaLop'];
$class = getOneClass($MaLop);
include("Includes/header.php");
if (isset($_POST['btnSave'])) {
    $MaLop = $_POST['txtMaLop'];
    $TenLopHoc = $_POST['txtTenLopHoc'];
    $GiaoVien = $_POST['txtGiaoVien'];
    $LichHoc = $_POST['txtLichHoc'];
    $HocPhi = $_POST['txtHocPhi'];
    $NgayBatDau = $_POST['txtNgayBatDau'];
    $NgayKetThuc = $_POST['txtNgayKetThuc'];

    editClass($MaLop, $TenLopHoc, $GiaoVien, $LichHoc, $HocPhi, $NgayBatDau, $NgayKetThuc);
}
?>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="txtMaLop">Ma Lop</label>
                        <input type="text" class="form-control" name="txtMaLop" id="txtMaLop" value="<?php echo $class['MaLop']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtTenLopHoc">Ten Lop Hoc</label>
                        <input type="text" class="form-control" name="txtTenLopHoc" id="txtTenLopHoc" value="<?php echo $class['TenLopHoc']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtGiaoVien">Giao Vien</label>
                        <input type="text" class="form-control" name="txtGiaoVien" id="txtGiaoVien" value="<?php echo $class['GiaoVien']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtLichHoc">Lich Hoc</label>
                        <input type="date" class="form-control" name="txtLichHoc" id="txtLichHoc" value="<?php echo $class['LichHoc']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtHocPhi">Hoc Phi</label>
                        <input type="text" class="form-control" name="txtHocPhi" id="txtHocPhi" value="<?php echo $class['HocPhi']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtNgayBatDau">NgayBatDau</label>
                        <input type="date" class="form-control" name="txtNgayBatDau" id="txtNgayBatDau" value="<?php echo $class['NgayBatDau']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtNgayKetThuc">Ngay Ket Thuc</label>
                        <input type="date" class="form-control" name="txtNgayKetThuc" id="txtNgayKetThuc" value="<?php echo $class['NgayKetThuc']; ?>">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="bg-success text-white" name="btnSave" id="btnSave">
                            Luu Lai
                        </button>
                    </div>

                    <div class="form-group">
                        <button type="back" class="bg-light " name="btnCancel" id="btnCancel">
                            <a class="btnCancel" href="index.php">Cancel</a>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </main>
</body>

<?php
include("Includes/footer.php");
?>