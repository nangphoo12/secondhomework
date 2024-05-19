<?php
//index array
echo "<pre/>";
$data= array("apple" ,"orange" ,"grape" ,"mango" ,"pineapple" ,"lemon" ,"kiwi" ,"watermelon" ,"coconut" ,"redberry" );
var_dump($data);
$data[9]= "blueberry";
var_dump($data);
echo "$data[6]";
echo "<br/>";
//associative array
$data2= ["Student_id"=> 152434,
"Name"=> "Lin Shi Shi",
"age" => 23,
"gender" => "Female",
"Year"=> "Fourth Year", 
"Email"=> "nangmyat444@gmail.com",
"Birth_date" => "26/4/2001",
"University" => "University of Computer Studies(Taunggyi)",
"Religion" => "Buddish",
"Nationality" => "Shan"
];
echo "<pre/>";
var_dump($data2);
$data2["Year"]= "Final Year";
var_dump($data2);
var_dump($data2["Name"]); 
?>