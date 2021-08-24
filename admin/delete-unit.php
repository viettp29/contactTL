<?php
session_start();
require_once("../includes/connection.php");
include "../includes/header.php";
$id = $_GET['id'];
$sql = "delete from unit where idUnit ='$id'";
$query = mysqli_query($conn, $sql);


if (!$query) {
?>
          <div class="alert alert-danger" role="alert">
                    This is a danger alert—check it out!
          </div>
<?php
} else {
?>
          <div class="alert alert-success" role="alert">
                    This is a success alert—check it out!
          </div>
<?php
}
?>