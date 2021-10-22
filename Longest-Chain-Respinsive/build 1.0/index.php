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
        $i;
        $x = 10;
        $y = strval(50/$x);
        //echo $y;
        $y = $y."%";
       // echo 'main chutia huin',$y;
        
        for($j=0; $j<$x; $j++)
        {
            for($i=0; $i<$x; $i++)
            {
                echo '<div class="box" id="1" style="--radius: ', $y, '"></div>';
            }
            echo '<div class="break"></div>';
        }
        ?>
</div>
</body>
</html>