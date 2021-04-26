<html>
<head>
<title>PHP Program To determine the area of triangle</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="num1" value="" placeholder="Enter a value"/> </td>
</tr>
<tr>
<td> <input type="text" name="num2" value="" placeholder="Enter b value"/> </td>
</tr>
<tr>
<td> <input type="text" name="num3" value="" placeholder="Enter c value"/> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];
// Compute s //
$s = ($a + $b + $c) / 2;
$area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c)); //Formula for area of the triangle
$precision = 4;
echo " Area of the trainagle is = ".number_format($area, $precision);
return 0;
}
?>
</body>
</html>
