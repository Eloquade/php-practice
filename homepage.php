<html>
<head>
 <title>PHP Assignment</title>
</head>
<body>
<form Name="f1" action="" method="post">
<select name="calculator">
<option value="none">Select a Calculator</option>
<option value="circle">Area and Circumference of a Circle</option>
<option value="celsius">Convert fahrenheit to Celsius</option>
<option value="rectangle">Area and Perimeter of a rectangle</option>
<option value="triangle">area of triangle</option>
</select>
<input type="submit" name = "Submit" Value = "Submit">
</form>
<?php
if (isset($_POST['Submit'])) {
$calculator = $_POST['calculator'];
if ($calculator == "circle") {
header('Location: circle.php');
}
else if ($calculator == "celsius"){
header("Location: celsius.php");
}
else if ($calculator == "rectangle"){
header("Location: rectangle.php");
}
else if ($calculator == "triangle"){
header("Location: triangle.php");
}
else {
print ("Error");
}
}
?>
</body>
</html>
