<?php

$db_config = parse_ini_file("/etc/dbapp.cfg");

mysql_connect( $db_config['db_server'], $db_config['db_user'], $db_config['db_user_password'] )or
                die("Could not connect: " . mysql_error());
                mysql_select_db("db");

?>

