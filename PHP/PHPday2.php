<?php
echo nl2br("welcome host \n Hello");

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

$arrays = array(12,45,10,25);
$sum = 0;
$avg = 0;
for($i=0;$i<5;$i++){
    $sum = $sum + $arrays[$i];
}
$avg = $sum/4;
echo "sum is $sum <br/>";
echo "average is $avg <br/>";
sort($arrays);
foreach($arrays as $v){
    echo "value is $v <br/>";
}

$person = array("Sara" =>31 ,"John" =>41 ,"Walaa" =>39 ,"Ramy" => 40);
asort($person);
ksort($person);
arsort($person);
krsort($person);
?>
