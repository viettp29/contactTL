<?php
session_start();
require_once("../includes/connection.php");
?>
<?php include "../includes/header.php" ?>
<?php
$sql = "select * from users ";
$query = mysqli_query($conn, $sql);
?>

<div class="container">
          <h4 class="text-center text-light">Danh sách các cán bộ của trường</h4>
          <i class="material-icons">
                    <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                              <i class="material-icons">
                                        <a href="index.php" style="text-decoration: none;color:black">trở lại</a>
                              </i>
                    </button>
          </i>
</div>
<div class=" table-center col-lg-12 col-md-12 m-5 ">
          <div class="table-responsive-md container">
                    <table class="table table-hover table-bordered border-secondary">
                              <thead>
                                        <tr>
                                                  <th class="text-center">STT</th>
                                                  <th class="text-center">Họ và Tên</th>
                                                  <th class="text-center">Chức vụ</th>
                                                  <th class="text-center">Phone Work</th>
                                                  <th class="text-center">Số điện thoại</th>
                                                  <th class="text-center">Email</th>
                                                  <th class="text-center">Mã đơn vị</th>

                                                  <th class="text-left">Actions</th>
                                                  <th class="text-left">Actions</th>
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

                                                            <td class="td-actions"> <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                                                                                <i class="material-icons">
                                                                                          <a href="update-user.php?id=<?= $item['id'] ?>" style="text-decoration: none;color:black">update</a>
                                                                                </i>
                                                                      </button> </td>
                                                            <td class="td-actions"> <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                                                                                <i class="material-icons">
                                                                                          <a href="delete-user.php?id=<?= $item['id'] ?>" style="text-decoration: none; color:black">delete</a>
                                                                                </i>
                                                                      </button></td>
                                                  </tr>

                                        <?php $i++;
                                        } ?>
                              </tbody>
                    </table>
          </div>
</div>