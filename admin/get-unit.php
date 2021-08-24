<?php
session_start();
require_once("../includes/connection.php");
?>
<?php include "../includes/header.php" ?>

<?php
$sql = "select * from unit ";
$query = mysqli_query($conn, $sql);
?>

<div class="container">
          <h4 class="text-center text-light">Danh sách các đơn vị trong trường</h4>
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
                                                  <!-- <th class="text-center">ID Unit</th> -->
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
                                                            <!-- <td class="text-center"><?= $item['idUnit'] ?></td> -->
                                                            <td><?= $item['nameUnit'] ?></td>
                                                            <td><?= $item['phoneWork'] ?></td>
                                                            <td class="text-center"><?= $item['address'] ?></td>
                                                            <td class="text-right"><?= $item['email'] ?></td>
                                                            <td class="text-right"><?= $item['website'] ?></td>
                                                            <td class="text-right"><?= $item['parentId'] ?></td>

                                                            <td class="td-actions"> <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
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