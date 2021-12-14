<?php 

$severname = "localhost";
$username = "root";
$password = "";
$databasename ="nike";
 

$coon = mysqli_connect( $severname, $username , $password , $databasename );


$sql =  "INSERT INTO `usres` (`id`, `fierstname`, `sms`, `nummer`, `email` )
 VALUES (NULL, '{$_POST ["firstname"]}', '{$_POST["sms"]}', '{$_POST["nummer"]}', '{$_POST["email"]}'  );";

mysqli_query($coon , $sql );


 header("Refresh:3; url=./index.html");

?>
<link rel="stylesheet" href="css/style.css">
<h1 id="alert">UW gegeven zijn verwerkt<h1>
