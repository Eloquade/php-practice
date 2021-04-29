<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <title>PHP Program To find Area and Perimeter of a rectangle</title>
    </head>
    <body>
        <form method="post">
            <table border="0">
            <tr>
                <td> <input type="text" name="num1" value="" placeholder="Enter length of rectangle side"/></td>
            </tr>
            <tr>
                <td> <input type="text" name="num2" value="" placeholder="Enter width of rectangle side"/></td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="Submit"/></td>
            </tr>
            </table>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $a = $_POST['num1'];
                $b = $_POST['num2'];
                $area = $a * $b; //Equation for Area of a square
                $perimeter = 2*($a+$b); //Equation for Perimeter of a square
                echo "Area of rectangle  is "." = ".$area ;
                echo "<br>";
                echo "Perimeter of rectangle is "." = ".$perimeter;
                return 0;
            }
        ?>
    </body>
</html>
