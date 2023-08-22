<?php

echo "PHP run <br />";

$con = new mysqli('mysql_db', 'root', 'root', 'mysql');

if ($con) {
    echo "DB Connected <br />";
}

include 'list.php';

echo '<hr />';