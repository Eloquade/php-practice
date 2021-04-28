<html>
<head>
 <title>PHP Assignment</title>
 <link rel="stylesheet" href="styles.css">
 <h1 class="homepage">Calculator</h1>
</head>
<body>
<br>
<form Name="f1" action="" method="post">
<select name="calculator">
<option value="none">Select a Calculator</option>
<option value="circle">Area and Circumference of a Circle</option>
<option value="celsius">Convert Fahrenheit to Celsius</option>
<option value="rectangle">Area and Perimeter of a Rectangle</option>
<option value="triangle">Area of Triangle</option>
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
<footer>
<section>
            <figure>
            <img src="./Images/1.jpg" alt="Area and Circumference of Circle">
            <figcaption>Area and Circumference of Circle</figcaption>
        </figure>
        <figure>
            <img src="./Images/2.jpg" alt="Fahrenheit to Celsius">
            <figcaption>Fahrenheit to Celsius</figcaption>
        </figure>
        <figure>
            <img src="./Images/3.jpg" alt="Perimeter of Rectangle">
            <figcaption>Perimeter of Rectangle</figcaption>
        </figure>
        <figure>
            <img src="./Images/4.png" alt="Area of Triangle">
            <figcaption>Area of Triangle</figcaption>
        </figure>
    </section>
</footer>
</html>