<?php
session_start();
include("./permission/permission.php");
require_once("../includes/connection.php");
?>
<?php include "./headers.php" ?>
<?php
if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $sql = "SELECT * FROM unit WHERE idUnit ='$id'";
          $result  = mysqli_query($conn, $sql);
          $data = mysqli_fetch_array($result);
?>
          <?php
          if (isset($_POST["btn1_submit"])) {
                    //lấy thông tin từ các form bằng phương thức POST
                    $idUnit = $_POST['id'];
                    $nameUnit = $_POST["nameUnit"];
                    $phoneWork = $_POST["phoneWork"];
                    $address = $_POST["address"];
                    $email = $_POST["email"];
                    $website = $_POST["website"];
                    $parentId = $_POST["parentId"];
                    if ($nameUnit == "" || $phoneWork == "" || $address == "" || $email == "") {
                              echo "bạn vui lòng nhập đầy đủ thông tin";
                    } else {
                              $sql = "UPDATE unit SET nameUnit='$nameUnit', phoneWork='$phoneWork', address='$address'
                    , email='$email', website= '$website', parentId= '$parentId'
                    WHERE idUnit='$idUnit'";
                              // thực thi câu $sql với biến conn lấy từ file connection.php
                              $check = mysqli_query($conn, $sql);
                              if (!$check) {
                                        echo "Loi";
                              } else {
                                        header("Location: ./get-unit.php");
                              }
                    }
          }
          ?>
          <section class="get-in-touch">
                    <h1 class="title">update Unit</h1>
                    <form class="contact-form row" action="update-unit.php" method="POST">
                              <input id="name" type="hidden" name="id" value="<?= $id ?>">
                              <div class="form-field col-lg-6">
                                        <input id="name" class="input-text js-input" type="text" name="nameUnit" value="<?= $data['nameUnit']; ?>">
                                        <label class="label" for="name" type="text" id="nameUnit">Tên đơn vị</label>
                              </div>
                              <div class="form-field col-lg-6 ">
                                        <input id="phone" class="input-text js-input" name="phoneWork" type="text" value="<?= $data['phoneWork']; ?>">
                                        <label class="label" for="phone" type="text" id="phoneWork">SĐT đơn vị</label>
                              </div>
                              <div class="form-field col-lg-6 ">
                                        <input id="company" class="input-text js-input" type="text" name="address" value="<?= $data["address"]; ?>">
                                        <label class="label" for="company" type="text" id="address">Địa Chỉ</label>
                              </div>
                              <div class="form-field col-lg-6 ">
                                        <input id="email" class="input-text js-input" type="email" name="email" value="<?= $data["email"]; ?>">
                                        <label class="label" for="email" type="text" id="email">Email</label>
                              </div>
                              <div class="form-field col-lg-6 ">
                                        <input id="website" class="input-text js-input" type="text" name="website" value="<?= $data["website"]; ?>">
                                        <label class="label" for="website" type="text" id="website">Website</label>
                              </div>
                              <div class="form-field col-lg-6">
                                        <input id="parentId" class="input-text js-input" type="text" name="parentId" value="<?= $data["parentId"]; ?>">
                                        <label class="label" for="parentId" type="text" id="parentId">Mã đơn vị cha</label>
                              </div>
                              <div class="form-field col-lg-12">
                                        <button class="submit-btn" type="submit" name="btn1_submit">UPDATE</button>
                    </form>
          </section>
<?php
}
?>
<!-- <section class="get-in-touch">
                    <h1 class="title">update Unit</h1>
                    <form class="contact-form row" action="update-unit.php" method="POST">
                              <input id="name" type="hidden" name="id">
                              <div class=" form-field col-lg-6">
                                        <input id="name" class="input-text js-input" type="text" name="nameUnit">
                                        <label class="label" for="name" type="text" id="nameUnit">Tên đơn vị</label>
                              </div>
                              <div class="form-field col-lg-6">
                                        <input id="phone" class="input-text js-input" name="phoneWork" type="text">
                                        <label class="label" for="phone" type="text" id="phoneWork">SĐT đơn vị</label>
                              </div>
                              <div class="form-field col-lg-6 ">
                                        <input id="company" class="input-text js-input" type="text" name="address">
                                        <label class="label" for="company" type="text" id="address">Địa Chỉ</label>
                              </div>
                              <div class="form-field col-lg-6 ">
                                        <input id="email" class="input-text js-input" type="email" name="email">
                                        <label class="label" for="email" type="text" id="email">Email</label>
                              </div>
                              <div class="form-field col-lg-6 ">
                                        <input id="website" class="input-text js-input" type="text" name="website">
                                        <label class="label" for="website" type="text" id="website">Website</label>
                              </div>
                              <div class="form-field col-lg-6">
                                        <input id="parentId" class="input-text js-input" type="text" name="parentId">
                                        <label class="label" for="parentId" type="text" id="parentId">Mã đơn vị cha</label>
                              </div>
                              <div class="form-field col-lg-12">
                                        <button class="submit-btn" type="submit" name="btn1_submit">UPDATE</button>
                    </form>
          </section>


<?php include "../includes/footer.php" ?>