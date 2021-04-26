<html>
<head>
<title>PHP Program To find Area and Circumference of a Circle</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td><input type="text" name="num1" value="" placeholder="Enter the radius of a circle"/></td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$r = $_POST['num1'];
$pi = 3.14;
$area = $pi * $r * $r;
echo "Area of a Circle is: ".$area;
echo "<br>";
$cir = 2*$pi*$r;
echo "Circumference of a circle is: " .$cir;
echo "<br>";
$diameter = 2*$r;
echo "diameter of a circle is: " .$cir;
echo "<br>";

return 0;
}
?>
</body>
</html>
