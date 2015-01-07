<?php

function add_slider($image)
{
$server ="localhost";
$user = "beautyse_admin";
$password = "123qweasd";
$database = "beautyse_beauty";

$con = mysqli_connect($server,$user,$password,$database);
$query= "INSERT INTO beautyse_beauty.slider(image) VALUES('{$image}')";
mysqli_query($con,$query);
}


function add_product($name,$description,$shemadgenloba,$price,$image,$cat,$lang)
{
$server ="localhost";
$user = "beautyse_admin";
$password = "123qweasd";
$database = "beautyse_beauty";

$con = mysqli_connect($server,$user,$password,$database);
$query= "INSERT INTO beautyse_beauty.product(name,description,shemadgenloba,price,image,category,lang) VALUES('{$name}','{$description}','{$shemadgenloba}','{$price}','{$image}','{$cat}','{$lang}')";
mysqli_query($con,$query);
}


function add_news($title,$main_image,$body,$add_date,$lang)
{
$server ="localhost";
$user = "beautyse_admin";
$password = "123qweasd";
$database = "beautyse_beauty";

$con = mysqli_connect($server,$user,$password,$database);
$query= "INSERT INTO beautyse_beauty.news(title,main_image,body,add_date,lang) VALUES('{$title}','{$main_image}','{$body}','{$add_date}','{$lang}')";
mysqli_query($con,$query);
}


function add_user($saxeli,$gvari,$email,$p_number,$adress,$password);
{
$server ="localhost";
$user = "beautyse_admin";
$password = "123qweasd";
$database = "beautyse_beauty";

$con = mysqli_connect($server,$user,$password,$database);
$query= "INSERT INTO beautyse_beauty.news(saxeli,gvari,email,p_number,adress,password) VALUES('{$saxe}','{$gvari}','{$email}','{$p_number}','{$adress}','{$password}')";
mysqli_query($con,$query);
}




 ?>