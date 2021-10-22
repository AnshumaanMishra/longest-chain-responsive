<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div  class="flex">
    <?php
        $color_codes = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F");
        $random_color = "#";
        $x = 10;
        $y = strval(75/$x);
        //echo $y;
        $y = $y."%";
       // echo 'main chutia huin',$y;
        
        for($j=0; $j<$x; $j++)
        {
            for($i=0; $i<$x; $i++)
            {
                $random_color='#';
                for($k=0; $k<6; $k++){
                    $random_keys=array_rand($color_codes);
                    // echo $random_color, ' ', $random_keys;
                    $random_color=$random_color.$color_codes[$random_keys];
                    if (strlen($random_color)==7){
                        break;
                    }
                }
                echo '<div class="box" id="1" style="--radius: ', $y, ';background-color: ', $random_color, ';"></div>';
            }
            echo '<div class="break"></div>';
        }
        ?>
</div>
</body>
</html>