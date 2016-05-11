<?php

$db['db_host'] = "cloud9.cidsemhy8d1r.us-east-1.rds.amazonaws.com:3306";
$db['db_user'] = "admin";
$db['db_pass'] = "password01";
$db['db_name'] = "cms";


//$db['db_host'] = "localhost";
//$db['db_user'] = "root";
//$db['db_pass'] = "";
//$db['db_name'] = "cms";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//if($connection){
//  echo "We are connected";
//}


?>