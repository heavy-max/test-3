<?php
for (
$i = 1; $i <= 5; ++$i) {
        echo $i*2 .'<br>';
    }

$i=0; 
while($i < 3){
    echo "i= $i"   ."<br>";
    $i +=1;
}

$i=1;
while($i<=20){
echo $i +=1 ."<br>";
}

$count=0;
while($count<20){

echo $count . "<br>";
$count +=2;
}

$count=0;
while($count<=100){
if($count===20){
    break;
}
if ($count % 3===0){
    $count++;
    continue;
}
echo $count ."<br>";
$count++;
}

$num=0;
do{
    echo "num = $num" ."<br>";
    $num+=1;
}while($num<3);

$fizz="Fizz";
$buzz="Buzz";
$fizzbuzz="Fizzbuzz";

for($i=1; $i<=50; $i++){
    if($i%15==0){
        echo $fizzbuzz;
    }
    else if($i%5==0){
        echo $buzz;
    }
    else if($i%3==0){
        echo $fizz;
    }
    else{
        echo $i;
    }
}
echo "<br>";
for($i=1; $i<=5; $i++){
    for($j=1; $j<=5; ++$j){
        echo "●";
    }
    echo "<br>";
}