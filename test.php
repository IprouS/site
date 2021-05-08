<?php
echo "";
$a=2;
$b=7;
$c=$a*$b;
echo "variable c is:".$c;
echo "<br>";
$str1="hello";
$str2="world";
echo $str1.' '.$str2;
echo "<br>";

//s$arr=[1,2,3,4,5];
$arr=[
    ["id"=>1,"name"=>"Влад Меркулов"],
    ["id"=>2,"name"=>"Коля Борзенков"],
    ["id"=>3,"name"=>"Петя Бородин"],
    ["id"=>4,"name"=>"Вася Петров"],
    ["id"=>5,"name"=>"Маша Иванова"],
    ["id"=>6,"name"=>"Саша Крючков"],
    "asdasdasd",
    ["data"=>["asdasd"=>"asd"]]
];
echo "<pre>";print_r($arr);
//echo $arr['vasya']['history'];
//echo $arr['vasya']['math'][2];
echo "<hr>";
foreach($arr as $row){
    //print_r($row);
    echo$row["id"];
    echo$row["name"];
    echo "<hr>";
}

?>