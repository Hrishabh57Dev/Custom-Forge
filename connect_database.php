<?php
/*
This file contains database connection configurationuser "root" and password ""
*/

define('DB_SERVER', '	sql104.epizy.com');
define('DB_USERNAME', '	epiz_31425047');
define('DB_PASSWORD', '6yMtWlczEl561');
define('DB_NAME', 'epiz_31425047_XXX');

// $database - variable
$database = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($database == false){
dir('Error: Cannot connect');
}


?>
