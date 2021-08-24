<?php
session_start();
require_once("../includes/connection.php");
?>
<?php include "./headers.php" ?>
<?php
if (isset($_POST["btn_submit"])) {
          //lấy thông tin từ các form bằng phương thức POST
          $fullName = $_POST["fullName"];
          $role = $_POST["role"];
          $phoneWork = $_POST["phoneWork"];
          $phone = $_POST["phone"];
          $email = $_POST["email"];
          $idUnit = $_POST["idUnit"];
          if ($fullName == "" || $role == "" || $phoneWork == "" || $phone == "" || $email == "") {
                    echo "bạn vui lòng nhập đầy đủ thông tin";
          } else {
                    $sql = "INSERT INTO users(fullName, role ,phoneWork, phone, email, idUnit) 
                    VALUES ( '$fullName', '$role', '$phoneWork', '$phone', '$email', '$idUnit')";
                    // thực thi câu $sql với biến conn lấy từ file connection.php
                    mysqli_query($conn, $sql);
                    echo "chúc mừng bạn đã tạo thành công";
          }
}

?>
<section class="get-in-touch">
          <h1 class="title">Create Users</h1>
          <form class="contact-form row" action="add-user.php" method="post">
                    <div class="form-field col-lg-6">
                              <input id="name" class="input-text js-input" type="text" name="fullName" required>
                              <label class="label" for="name" type="text" id="nameUnit" name="fullName">Họ và Tên </label>
                    </div>
                    <div class="form-field col-lg-6 ">
                              <input id="phone" class="input-text js-input" type="text" name="role" required>
                              <label class="label" for="phone" type="text" name="role" id="role">Chức vị</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                              <input id="company" class="input-text js-input" type="text" name="phoneWork" required>
                              <label class="label" for="company" type="text" id="phoneWork" name="phoneWork">SĐT cơ quan</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                              <input id="email" class="input-text js-input" type="text" name="phone" required>
                              <label class="label" for="email" type="text" id="phone" name="phone">Số điện thoại</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                              <input id="website" class="input-text js-input" type="email" name="email">
                              <label class="label" for="website" type="text" id="email" name="email">Email</label>
                    </div>
                    <div class="form-field col-lg-6">
                              <input id="parentId" class="input-text js-input" type="text" name="idUnit">
                              <label class="label" for="parentId" type="text" id="idUnit" name="idUnit">Mã đơn vị</label>
                    </div>
                    <div class="form-field col-lg-12">
                              <input class="submit-btn" type="submit" name="btn_submit" id="btn_submit" value="ADD">
          </form>
</section>
<?php include "../includes/footer.php" ?>