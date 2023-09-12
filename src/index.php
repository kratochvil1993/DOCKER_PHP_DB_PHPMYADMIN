<?php

echo "PHP run <br />";

$con = new mysqli('mysql_db', 'root', 'root', 'mysql');

if (isset($con) && $con) {
    echo "DB Connected <br />";
} else {
    echo "DB Notconnected <br />";
}

include 'list.php';

echo '<hr />';

//echo '<pre>' . print_r($currency, true) . '</pre>';
