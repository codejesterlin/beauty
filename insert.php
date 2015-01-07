<?php require_once("function.php"); ?>
<?php

$ena =0;
$cat =0;
if(isset($_POST["submit"]))
{
	if($_POST["ena"] ="ქართული")
	{
		$ena = 1;
	}
	if($_POST["ena"] ="ინგლისური")
	{
		$ena = 2;
	}
	if($_POST["ena"] ="ინგლისური")
	{
		$ena = 3;
	}
	if($_POST["cat"] ="სახლის მოვლა")
	{
		$cat = 2;
	}
	if($_POST["cat"] ="სპეც. საშუალებები")
	{
		$cat = 1;
	}
	$name = $_POST["name"];
	$description = $_POST["description"];
	$shemadgenloba = $_POST["shemadgenloba"];
	$price = $_POST["price"];
	$image = $_POST["image"];
	
	add_product($name,$description,$shemadgenloba,$price,$image,$cat,$ena);
	echo "warmatebit daemata";

}

 ?>