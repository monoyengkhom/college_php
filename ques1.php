<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest</title>
</head>
<body>
    <div class="main">
    <h2>Find Largest of the three numbers.</h2>
    <form method="post">
    <label for="num1">Enter the first num: </label>
    <input type="number" id="num1" name="num1"><br> <br>
    <label for="num2">Enter the second number: </label>
    <input type="number" id="num2" name="num2"><br> <br>
    <label for="num3">Enter the third number: </label>
    <input type="number" id="num3" name="num3"> <br> <br>
    <input type="submit" value="largest">
    </form>
    </div>
    

    <?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        echo "The entered numbers are ".$num1.", ".$num2." and ".$num3."\n\n";

        if($num1>$num2 && $num1>$num3){
            $big = $num1;
        }
        else{
            if($num2>$num3){
                $big = $num2;
            }
            else{
                $big = $num3;
            }
        }

        echo "</br>The largest number of the three number is: ".$big;
     }
    ?>
</body>
</html>