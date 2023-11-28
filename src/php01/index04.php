<?php
$a=7;
$people="Saburo";

if ($a === 5) {
echo "\$aは5です";
}
elseif($a===7){
echo "\$aは７です";
}
else{
echo "\$aは5と7以外です";
}
echo "<br>";

switch($people){
case "Taro":
echo "太郎です";
break;    
case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
}
echo "<br>";

$b=($a>5) ? "TRUE" : "FALSE";
echo $b;

