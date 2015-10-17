<?php
$link = mysql_connect('localhost/dbtest', 'admin', 'admin');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>