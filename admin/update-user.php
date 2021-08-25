<?php
session_start();
include("./permission/permission.php");
require_once("../includes/connection.php");
?>
<?php include "./headers.php" ?>
<?php
if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $sql = "SELECT * FROM users WHERE id ='$id'";
          $result  = mysqli_query($conn, $sql);
          $data = mysqli_fetch_array($result);
?>
          <section class="get-in-touch">
                    <h1 class="title">update User</h1>
                    <form class="contact-form row" action="update-user.php" method="POST">
                              <input id="name" type="hidden" name="id" value="<?= $id ?>" />
                              <div class="form-field col-lg-6">
                                        <input id="name" class="input-text js-input" type="text" name="fullName" value="<?= $data['fullName'] ?>" required>
                                        <label class="label" for="name" type="text" id="nameUnit" name="fullName">Họ và Tên </label>
                              </div>
                              <div class="form-field col-lg-6 ">
                                        <input id="phone" class="input-text js-input" type="text" name="role" value="<?= $data['role'] ?>" required>
                                        <label class="label" for="phone" type="text" name="role" id="role">Chức vị</label>
                              </div>
                              <div class="form-field col-lg-6 ">
                                        <input id="company" class="input-text js-input" type="text" name="phoneWork" value="<?= $data['phoneWork'] ?>" required>
                                        <label class="label" for="company" type="text" id="phoneWork" name="phoneWork">SĐT cơ quan</label>
                              </div>
                              <div class="form-field col-lg-6 ">
                                        <input id="email" class="input-text js-input" type="text" name="phone" value="<?= $data['phone'] ?>" required>
                                        <label class="label" for="email" type="text" id="phone" name="phone">Số điện thoại</label>
                              </div>
                              <div class="form-field col-lg-6 ">
                                        <input id="website" class="input-text js-input" type="email" name="email" value="<?= $data['email'] ?>" required>
                                        <label class="label" for="website" type="text" id="email" name="email">Email</label>
                              </div>
                              <div class=" form-field col-lg-6">
                                        <input id="parentId" class="input-text js-input" type="text" name="idUnit" value="<?= $data['idUnit'] ?>" required>
                                        <label class="label" for="parentId" type="text" id="idUnit" name="idUnit">Mã đơn vị</label>
                              </div>
                              <div class="form-field col-lg-12">
                                        <input class="submit-btn" type="submit" name="btn1_submit" id="btn_submit" value="UPDATE">
                    </form>
          </section>
<?php
} else {
?>
          <section class="get-in-touch">
                    <h1 class="title">update User</h1>
                    <form class="contact-form row" action="update-user.php" method="POST">
                              <input id="name" type="hidden" name="id" />
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
                                        <input id="website" class="input-text js-input" type="email" name="email" required>
                                        <label class="label" for="website" type="text" id="email" name="email">Email</label>
                              </div>
                              <div class=" form-field col-lg-6">
                                        <input id="parentId" class="input-text js-input" type="text" name="idUnit" required>
                                        <label class="label" for="parentId" type="text" id="idUnit" name="idUnit">Mã đơn vị</label>
                              </div>
                              <div class="form-field col-lg-12">
                                        <input class="submit-btn" type="submit" name="btn1_submit" id="btn_submit" value="UPDATE">
                    </form>
          </section>
<?php
};
?>



<?php
if (isset($_POST["btn1_submit"])) {
          //lấy thông tin từ các form bằng phương thức POST
          $id = $_POST["id"];
          $fullName = $_POST["fullName"];
          $role = $_POST["role"];
          $phoneWork = $_POST["phoneWork"];
          $phone = $_POST["phone"];
          $email = $_POST["email"];
          $idUnit = $_POST["idUnit"];
          if ($fullName == "" || $role == "" || $phoneWork == "" || $phone == "" || $email == "" || $idUnit == "") {
                    echo "bạn vui lòng nhập đầy đủ thông tin";
          } else {
                    $sql = "UPDATE users SET fullName='$fullName', role='$role', phoneWork='$phoneWork', phone='$phone'
                    , email='$email', idUnit= '$idUnit'
                    WHERE id='$id'";
                    // thực thi câu $sql với biến conn lấy từ file connection.php
                    $check = mysqli_query($conn, $sql);
                    echo $check;
                    if (!$check) {
                              echo "Không thể cập nhập người dùng";
                    } else {
                              header("Location: get-user.php");
                              exit;
                    }
          }
}
?>
<?php include "../includes/footer.php" ?>