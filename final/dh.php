<?php

$n = $_POST['nm'];
$p = $_POST['pw'];
$e = $_POST['em'];

$cnt = mysqli_connect('localhost', 'root', 'root', 'sqltest2');
$qry = "insert into regusers(name, email, pw) values ('$n', '$e', '$p')";

mysqli_query($cnt, $qry);

mysqli_close($cnt);

header('location:result.php');

?>