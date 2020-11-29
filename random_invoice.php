<php
function random($len)

{function random($len){

$result = "";    $chars = "abcdefghijklmnopqrstuvwxyz0123456789";

$charArray = str_split($chars);

for($i = 0; $i < $len; $i++){

$randItem = array_rand($charArray);

$result .= "".$charArray[$randItem];    }    return $result;}

$invoice1 = random(4);
}
