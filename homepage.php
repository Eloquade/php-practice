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
=======
    <head>
        <title>PHP Assignment</title>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

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
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>

