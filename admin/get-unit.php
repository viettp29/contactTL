<?php
session_start();
include("./permission/permission.php");
require_once("../includes/connection.php");
?>
<?php include "./headers.php" ?>
<?php
$sql = "select * from unit ";
$query = mysqli_query($conn, $sql);
?>



<div class=" table-center col-lg-12 col-md-12 m-5 ">
          <div class="table-responsive-md container">

                    <div class="container">
                              <i class="material-icons">
                                        <h4 class="text-start my-6 px-5">* Danh sách các đơn vị trong trường</h4>
                                        <button type="button" rel="tooltip" class="btn btn-secondary btn-just-icon btn-md m-5" data-original-title="" title="">
                                                  <i class="material-icons">
                                                            <a href="index.php" style="text-decoration: none;color:black">trở lại</a>
                                                  </i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-md" data-original-title="" title="">
                                                  <i class="material-icons">
                                                            <a href="add-unit.php" style="text-decoration: none;color:black">thêm đơn vị</a>
                                                  </i>
                                        </button>
                              </i>
                    </div>
                    <table class="table table-hover table-bordered border-secondary">
                              <thead>
                                        <tr>
                                                  <th class="text-center">STT</th>
                                                  <th class="text-center">ID đơn vị</th>
                                                  <th class="text-center">Name Unit</th>
                                                  <th class="text-center">Phone Work</th>
                                                  <th class="text-center">Address</th>
                                                  <th class="text-center">Email</th>
                                                  <th class="text-center">Website</th>
                                                  <th class="text-center">Mã đơn vị cha</th>
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
                                                            <td class="text-center"><?= $item['idUnit'] ?></td>
                                                            <td><?= $item['nameUnit'] ?></td>
                                                            <td><?= $item['phoneWork'] ?></td>
                                                            <td class="text-center"><?= $item['address'] ?></td>
                                                            <td class="text-right"><?= $item['email'] ?></td>
                                                            <td class="text-right"><?= $item['website'] ?></td>
                                                            <td class="text-right"><?= $item['parentId'] ?></td>

                                                            <td class="td-actions"> <button type="button" rel="tooltip" class="btn btn-warning btn-just-icon btn-sm" data-original-title="" title="">
                                                                                <i class="material-icons">
                                                                                          <a href="update-unit.php?id=<?= $item['idUnit'] ?>" style="text-decoration: none;color:black">update</a>
                                                                                </i>
                                                                      </button> </td>
                                                            <td class="td-actions"> <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                                                                                <i class="material-icons">
                                                                                          <a href="delete-unit.php?id=<?= $item['idUnit'] ?>" style="text-decoration: none; color:black">delete</a>
                                                                                </i>
                                                                      </button></td>
                                                  </tr>

                                        <?php $i++;
                                        } ?>
                              </tbody>
                    </table>
          </div>
</div>
<?php include "../includes/footer.php" ?>