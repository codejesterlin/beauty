<?php require_once("function.php"); ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>სიახლის დამატება - Beauty Secrets</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
<script type="text/javascript" src="js/placeholder.js"></script>
</head>
<body>
<div class="content">
<form method="post" action="#">
აირჩიეთ ენა<font color="red">*</font>:<br>
<select name="ena">
<option value="ქართული">ქართული</option>
<option value="რუსული">რუსული</option>
<option value="ინგლისური">ინგლისური</option>
</select><br>
სათაური<font color="red">*</font>:<br>
<input type="text" name="title" width="350" placeholder="სათაური" name="satauri" required><br>
სურათის ბმული<font color="red">*</font>:<br>
<input type="url" name="main_image" width="350" placeholder="მაგ. http://picz.ge/surati.png" name="surati" required><br>
ტექსტი<font color="red">*</font>:<br>
<textarea cols="10" name="body" rows="20"></textarea>
<input type="submit" name="submit" value="გაგზავნა" width="350">
</form>
</div>
</body>
</html>

<?php
$ena =0;
$add_date =  date('Y/m/d');
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
$title = $_POST["title"];
$body = $_POST["body"];
$main_image = $_POST["main_image"];
add_news($title,$main_image,$body,$add_date,$ena);
header('Location: menu.html');
}


 ?>