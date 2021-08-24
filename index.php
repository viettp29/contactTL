<?php
session_start();
require_once("./includes/connection.php");
?>
<?php include "./includes/header.php"; ?>
<?php
$sql = "select * from users ";
$query = mysqli_query($conn, $sql);
?>


<div class=" table-center col-lg-12 col-md-12 m-5 ">
    <div class="table-responsive-md container">
        <div class="container">
            <i class="material-icons">
                <h4 class="text-center"> DANH SÁCH CÁN BỘ TRONG TRƯỜNG</h4>

            </i>
        </div>
        <input class="input my-5 p-2" type="text" id="myInput" onkeyup="myFunction()" style="width:100%" placeholder="Nhập bất kỳ thông tin mà bạn biết về cán bộ ...">

        <table class="table table-hover table-bordered border-secondary my-3" id="myTable">
            <thead>
                <tr class="header">
                    <th class="text-center">STT</th>
                    <th class="text-center">Họ và Tên</th>
                    <th class="text-center">Chức vụ</th>
                    <th class="text-center">Phone Work</th>
                    <th class="text-center">Số điện thoại</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Mã đơn vị</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($query as $item) {

                ?>
                    <tr>
                        <td class="text-center"><?= $i ?></td>
                        <td><?= $item['fullName'] ?></td>
                        <td class="text-center"><?= $item['role'] ?></td>
                        <td><?= $item['phoneWork'] ?></td>
                        <td class="text-right"><?= $item['phone'] ?></td>
                        <td class="text-right"><?= $item['email'] ?></td>
                        <td class="text-right"><?= $item['idUnit'] ?></td>
                    </tr>

                <?php $i++;
                } ?>
            </tbody>
        </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>

    </div>
</div>


<?php include "./includes/footer.php" ?>