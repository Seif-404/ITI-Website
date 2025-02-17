<?php
//php info :
echo phpinfo();

//define constant:
define("Wtname",'PHPwebsite');
echo Wtname;

//filename and path:
echo __FILE__;

print_r($_SERVER['SERVER_NAME']);

print_r($_SERVER['SERVER_PORT']);

print_r($_SERVER['SERVER_ADDR']);

$age = 10;
switch($age){
    case  $age < 5:
        echo 'Stay at home';
        break;
    case  $age == 5:
       echo 'Go to kindergarden';
       break;
    case 6 < $age :
       echo 'Go to grade:XXX';
        break;
    case $age < 12:
        echo 'Go to grade:XXX';
        break;
}
  
?>