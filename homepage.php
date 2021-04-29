<html>
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
    </body>
</html>
