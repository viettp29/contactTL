<?php
session_start();
include("./permission/permission.php");
require_once("../includes/connection.php");
?>
<?php include "./headers.php"; ?>
<?php
if (isset($_POST["btn_submit"])) {
          //lấy thông tin từ các form bằng phương thức POST
          $nameUnit = $_POST["nameUnit"];
          $phoneWork = $_POST["phoneWork"];
          $address = $_POST["address"];
          $email = $_POST["email"];
          $website = $_POST["website"];
          $parentId = $_POST["parentId"];
          if ($nameUnit == "" || $phoneWork == "" || $address == "" || $email == "") {
                    echo "bạn vui lòng nhập đầy đủ thông tin";
          } else {
                    $sql = "INSERT INTO unit(nameUnit, phoneWork ,address, email, website, parentId) 
                    VALUES ( '$nameUnit', '$phoneWork', '$address', '$email', '$website', '$parentId')";
                    // thực thi câu $sql với biến conn lấy từ file connection.php
                    mysqli_query($conn, $sql);
                    echo "chúc mừng bạn đã tạo thành công";
          }
}
?>
<section class="get-in-touch">
          <h1 class="title">Create Unit</h1>
          <form class="contact-form row" action="add-unit.php" method="post">
                    <div class="form-field col-lg-6">
                              <input id="name" class="input-text js-input" type="text" name="nameUnit" required>
                              <label class="label" for="name" type="text" id="nameUnit" name="nameUnit">Tên đơn vị</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                              <input id="phone" class="input-text js-input" type="text" name="phoneWork" required>
                              <label class="label" for="phone" type="text" name="phoneWork" id="phoneWork">SĐT đơn vị</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                              <input id="company" class="input-text js-input" type="text" name="address" required>
                              <label class="label" for="company" type="text" id="address" name="address">Địa Chỉ</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                              <input id="email" class="input-text js-input" type="email" name="email" required>
                              <label class="label" for="email" type="text" id="email" name="email">Email</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                              <input id="website" class="input-text js-input" type="text" name="website">
                              <label class="label" for="website" type="text" id="website" name="website">Website</label>
                    </div>
                    <div class="form-field col-lg-6">
                              <input id="parentId" class="input-text js-input" type="text" name="parentId">
                              <label class="label" for="parentId" type="text" id="parentId" name="parentId">Mã đơn vị cha</label>
                    </div>
                    <div class="form-field col-lg-12">
                              <input class="submit-btn" type="submit" name="btn_submit" id="btn_submit" value="ADD">
          </form>
</section>
<?php include "../includes/footer.php" ?>