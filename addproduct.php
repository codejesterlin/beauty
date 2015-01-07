
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>პროდუქციის დამატება - Beauty Secrets</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
<script type="text/javascript" src="js/placeholder.js"></script>
</head>
<body>
<div class="content-big">
<form method="post" action="insert.php">
აირჩიეთ ენა<font color="red">*</font>:<br>
<select name="ena">
<option value="ქართული">ქართული</option>
<option value="რუსული">რუსული</option>
<option value="ინგლისური">ინგლისური</option>
</select><br>
სათაური<font color="red">*</font>:<br>
<input type="text" name="name" width="350" placeholder="სათაური" name="satauri" required><br>
სურათის ბმული<font color="red">*</font>:<br>
<input type="url" name="image" width="350" placeholder="მაგ. http://picz.ge/surati.png" name="surati" required><br>
ტექსტი<font color="red">*</font>:<br>
<textarea name="description" cols="10" rows="10"></textarea><br>
შემადგენლობა<font color="red">*</font>:<br>
<textarea name="shemadgenloba" cols="10" rows="5"></textarea><br>
ფასი<font color="red">*</font>:<br>
<input type="text" name="price" width="350" placeholder="პროდუქციის ღირებულება" name="fasi" required><br>
კატეგორია<font color="red">*</font>:<br>
<select name="cat">
<option value=""></option>
<option value="სახლის მოვლა">სახლის მოვლა</option>
<option value="სპეც.საშუალებები">სპეც. საშუალებები</option>
</select><br><br>
<input type="submit" name="submit" value="გაგზავნა" width="350">
</form>
</div>
</body>
</html>

