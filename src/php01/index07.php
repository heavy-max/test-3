<?php
$people=array("taro","jiro","saburo");
var_dump($people);
echo "<br>";
echo $people[1] ;

$people=[
    [
        "last_name"=>"yamada",
        "first_name"=>"taro",
        "age"=>29,
        "gender"=>"man"
    ],
    [
        "last_name"=>"suzuki",
        "first_name"=>"jiro",
        "age"=>25,
        "gender"=>"man"
    ]
   ];

echo $people[0]["last_name"]. "<br>";   

$people=array("taro","jiro","saburo");
foreach($people as $person){
    echo $person;
    echo "<br>";
}
$people=array(
    "person1"=>"taro",
    "person2"=>"jiro",
    "person3"=>"saburo"
);
foreach($people as $person=>$name){
    print $person."は".$name."です<br>";
}

$people=[
    ["Taro",25,"men"],
    ["Jiro",20,"men"],
    ["hanako",16,"women"]
];
foreach($people as $person){
    echo $person[0]."(".$person[1].'歳'. $person[2] .')<br>';
}

$fruit1 = 'apple';
$fruit2 = 'orange';