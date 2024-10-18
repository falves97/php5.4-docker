<?php
// Connecting, selecting database
$link = mysql_connect('mysql', 'app', 'app')
or die('Could not connect: ' . mysql_error());
echo 'Connected successfully';
// Closing connection
mysql_close($link);
?>