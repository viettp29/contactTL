<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../admin/css/style.css">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<link rel="stylesheet" href="../css/styles.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<?php
session_start();
?>
<div class="container">
          <div class="row">
                    <div class="col-md-6">
                              <div class="card">
                                        <?php
                                        //Gọi file connection.php
                                        require_once("../includes/connection.php");
                                        // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
                                        if (isset($_POST["btn_submit"])) {
                                                  // lấy thông tin người dùng
                                                  $username = $_POST["username"];
                                                  $password = $_POST["password"];
                                                  //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
                                                  //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
                                                  $username = strip_tags($username);
                                                  $username = addslashes($username);
                                                  $password = strip_tags($password);
                                                  $password = addslashes($password);
                                                  if ($username == "" || $password == "") {
                                                            echo "username hoặc password bạn không được để trống!";
                                                  } else {
                                                            $sql = "select * from admin where username = '$username' and password = '$password' ";
                                                            $query = mysqli_query($conn, $sql);
                                                            $num_rows = mysqli_num_rows($query);

                                                            if ($num_rows == 0) {
                                                                      echo "tên đăng nhập hoặc mật khẩu không đúng !";
                                                            } else {
                                                                      // Lấy ra thông tin người dùng và lưu vào session
                                                                      while ($data = mysqli_fetch_array($query)) {
                                                                                $_SESSION["user_id"] = $data["id"];
                                                                                $_SESSION["user_name"] = $data["username"];
                                                                      }

                                                                      // Thực thi hành động sau khi lưu thông tin vào session
                                                                      // ở đây mình tiến hành chuyển hướng trang web tới admin.php
                                                                      header('Location: index.php');
                                                            }
                                                  }
                                        }
                                        ?>
                                        <form class="box" method="POST" action="login.php">
                                                  <h1>Login</h1>
                                                  <p class="text-muted"> Please enter your login and password!</p>
                                                  <input type="text" name="username">
                                                  <input type="password" name="password">
                                                  <input type="submit" name="btn_submit" value="Đăng nhập">
                                                  <div class="col-md-12">
                                                  </div>
                                        </form>
                              </div>
                    </div>
          </div>
</div>

<!-- <form method="POST" action="login.php">
          <fieldset>
                    <legend>Đăng nhập</legend>
                    <table>
                              <tr>
                                        <td>Username</td>
                                        <td><input type="text" name="username" size="30"></td>
                              </tr>
                              <tr>
                                        <td>Password</td>
                                        <td><input type="password" name="password" size="30"></td>
                              </tr>
                              <tr>
                                        <td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng nhập"></td>
                              </tr>
                    </table>
          </fieldset>
</form> -->