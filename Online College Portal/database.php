<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"finalproj");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>