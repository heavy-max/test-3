<?php
function keisan($a,$b)
{
    return $a+$b; 
}
echo keisan(3,2);


function score($score1,$score2,$score3)
{
    $score=$score1+$score2+$score3;
    if($score>210){
    echo  "合計点は".$score."点なので合格です";
    }
    else{
    echo $score . "点なので不合格です";
    }
}
 (score(90,90,0));
   

function getSquareArea($base, $height)
{
  echo $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

 getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);

require_once "index07.php";

echo '$fruit1：'.$fruit1.'<br>';
echo '$fruit2：'.$fruit2.'<br>';

$fruit1 = 'melon';
$fruit2 = 'melon';



//2回目は読み込まれないので$fruit = melon
echo '$fruit1：'.$fruit1.'<br>';
echo '$fruit2：'.$fruit2.'<br>';

require "index07.php";

//2回目は読み込まれないので$fruit = melon
echo '$fruit1：'.$fruit1.'<br>';
echo '$fruit2：'.$fruit2.'<br>';

$now = new DateTime();
//フォーマットして出力
echo $now->format('Y-m-d');