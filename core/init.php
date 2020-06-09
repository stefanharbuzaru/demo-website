<?php
$db=mysqli_connect('127.0.0.1','root','','mymag');
if(mysqli_connect_errno()) {
echo 'Database Connection failed: ', mysqli_connect_error();
die();
}
