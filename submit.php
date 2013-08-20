<?php
require('opendb.php');

open();
$email = filter_that_shit($_POST['email']);
$company = filter_that_shit($_POST['company']);
$abstract = filter_that_shit($_POST['abstract']);

$sql = "INSERT INTO hackny VALUES ('', '$email', '$company', '$abstract')";
$result = mysql_query($sql);
mysql_close();

?>
