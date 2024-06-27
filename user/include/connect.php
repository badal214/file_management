<?php
$connect = mysqli_connect("localhost","root","","file_manage");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>