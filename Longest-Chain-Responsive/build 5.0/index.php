<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="query-container">
            <?php
                $num_of_rows=1;
                $color_codes= array("#FFFFFF", "#FFFFFF", "#FFFFFF");
                if(isset($_POST['submit'])){
                    $num_of_rows = $_POST['num-of-rows'];
                    $color1 = $_POST['color1'];
                    $color2 = $_POST['color2'];
                    $color3 = $_POST['color3'];
                    $color_codes = array($color1, $color2, $color3);
                }
            ?>
        </div>
        <div class="form">
            <form action="" method="post">
                Number of Rows and Columns: 
                <input name="num-of-rows" type="number" class="input-box"><br><br>
                Colour 1:
                <input name="color1" type="text" class="input-box"><br><br>
                Colour 2:
                <input name="color2" type="text" class="input-box"><br><br>
                Colour 3:
                <input name="color3" type="text" class="input-box"><br><br>
                <input name="submit" type="submit" value="Submit" class="submit-button">
            </form>
        </div>
        <div  class="flex">
            <?php
            // throw new Exception();
                // echo $color1;
                $x = $num_of_rows;
                $y = strval(75/$x);
                $y = $y."%";
                for($j=0; $j<$x; $j++)
                {
                    for($i=0; $i<$x; $i++)
                    {
                        if(count($color_codes)!=0){
                            $random_color = $color_codes[array_rand($color_codes)];
                            echo '<div class="box" id="1" style="--radius: ', $y, ';background-color: ', $random_color, ';"></div>';
                        }
                    }
                    echo '<div class="break"></div>';
                }
                ?>
        </div>
    </body>
</html>
