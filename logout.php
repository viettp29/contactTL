<?php
//Include constants.php for SITEURL
include('../includes/connect.php');
//1. Destory the Session huỷ tất cả các phiên đang có
session_destroy(); //Unsets $_SESSION['user'] huỷ 1 phiên đăng nhập

//2. REdirect to Login Page
header('location: ./login.php');
