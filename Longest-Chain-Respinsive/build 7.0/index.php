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
                $max_chain_length = 1;
                $max_chain_index = array();
                $x = $num_of_rows;
                $y = strval(75/$x);
                $y = $y."%";
                for($j=0; $j<$x; $j++)
                {
                    $color1_count = 1;
                    $color2_count = 1;
                    $color3_count = 1;
                    $color_matrix=array();
                    for($i=0; $i<$x; $i++)
                    {
                        if(count($color_codes)!=0){
                            $random_color = $color_codes[array_rand($color_codes)];
                            echo '<div class="box" id="a',strval($j*10+$i),'" style="--radius: ', $y, ';background-color: ', $random_color, ';"></div>';
                            array_push($color_matrix, $random_color);
                        }
                    }
                    // // print_r ($color_matrix);
                    for($i=0; $i<$x-1; $i++)
                    {
                        if($color_matrix[$i] == $color1)
                        {
                            // echo "<br>", $i, ": color1 :count: ", $color1_count;
                            if(($color_matrix[$i+1]==$color1) && ($i+1==$x-1) && ($color1_count+1 > $max_chain_length))
                            {
                                $color1_count++;
                                $max_chain_length = $color1_count;
                                $max_chain_index = array();
                                array_push($max_chain_index, $j, $i-$max_chain_length+2);
                                // echo "<br>color1_count: ", $color1_count;
                                // echo "<br>max_chain_length: ", $max_chain_length;
                                // print_r($max_chain_index);
                                $color1_count=1;
                                // echo "<br>color1-count: reset ", $color1_count;
                            }
                            elseif($color_matrix[$i+1]==$color1)
                            {
                                $color1_count++;
                                // echo "<br>color1-count: ", $color1_count;
                            }
                            elseif($color1_count > $max_chain_length)
                            {
                                $max_chain_length = $color1_count;
                                $max_chain_index = array();
                                array_push($max_chain_index, $j, $i-$max_chain_length+1);
                                // echo "<br>color1_count: ", $color1_count;
                                // echo "<br>max_chain-length: ", $max_chain_length;
                                $color1_count=1;
                                // print_r($max_chain_index);
                                // echo "<br>color1-count: reset ", $color1_count;
                            }
                            else
                            {
                                $color1_count=1;
                                // echo "<br>color1-count: reset ", $color1_count;
                                
                            }
                        }
                        if($color_matrix[$i] == $color2)
                        {
                            // echo "<br>", $i, ": color2: count: ", $color2_count;
                            if(($color_matrix[$i+1]==$color2) && ($i+1 == $x-1) && ($color2_count+1 > $max_chain_length))
                            {
                                $color2_count++;
                                $max_chain_length = $color2_count;
                                $max_chain_index = array();
                                array_push($max_chain_index, $j, $i-$max_chain_length+2);
                                // echo "<br>color2_count: ", $color2_count;
                                // echo "<br>max_chain_length: ", $max_chain_length;
                                // print_r($max_chain_index);
                                $color2_count=1;
                                // echo "<br>color2-count: reset ", $color2_count;
                            }
                            elseif($color_matrix[$i+1]==$color2)
                            {
                                $color2_count++;
                                // echo "<br>color2-count: ", $color2_count;
                            }
                            elseif($color2_count > $max_chain_length)
                            {
                                $max_chain_length = $color2_count;
                                $max_chain_index = array();
                                array_push($max_chain_index, $j, $i-$max_chain_length+1);
                                // echo "<br>color2_count: ", $color2_count;
                                // echo "<br>max_chain-length: ", $max_chain_length;
                                $color2_count=1;
                                // print_r($max_chain_index);
                                // echo "<br>color2-count: reset ", $color2_count;
                            }
                            else
                            {
                                $color2_count=1;
                                // echo "<br>color2-count: reset ", $color2_count;
                            }
                        }
                        if($color_matrix[$i] == $color3)
                        {
                            // echo "<br>", $i, ": : color3: count: ", $color3_count;
                            if(($color_matrix[$i+1]==$color3) && ($i+1==$x-1) && ($color3_count+1 > $max_chain_length))
                            {
                                $color3_count++;
                                $max_chain_length = $color3_count;
                                $max_chain_index = array();
                                array_push($max_chain_index, $j, $i-$max_chain_length+2);
                                // echo "<br>color3_count: ", $color3_count;
                                // echo "<br>max_chain_length: ", $max_chain_length;
                                // print_r($max_chain_index);
                                $color3_count=1;
                                // echo "<br>color3-count: reset ", $color3_count;
                            }
                            elseif($color_matrix[$i+1]==$color3)
                            {
                                $color3_count++;
                                // echo "<br>color3-count: ", $color3_count;
                            }
                            elseif($color3_count > $max_chain_length)
                            {
                                $max_chain_length = $color3_count;
                                $max_chain_index = array();
                                array_push($max_chain_index, $j, $i-$max_chain_length+1);
                                // echo "<br>color3_count: ", $color3_count;
                                // echo "<br>max_chain-length: ", $max_chain_length;
                                $color3_count=1;
                                // print_r($max_chain_index);
                                // echo "<br>color3-count: reset ", $color3_count;
                            }
                            else
                            {
                                $color3_count=1;
                                // echo "<br>color3-count: reset ", $color3_count;
                            }
                        }
                    }
                    echo '<div class="break"></div>';
                }
                // echo $max_chain_index[0];
                $row = $max_chain_index[0];
                // echo $max_chain_index[1];
                $column = $max_chain_index[1];
                // echo $max_chain_length;
                $m = $max_chain_length;
                $a=($row*$x+$column);
                $f=$a+$m;
                for($a; $a<$f; $a++)
                {
                    // echo $a, ' ', $f, ' ';
                    echo '<style>#a', $a, '{border-radius:100px; filter: opaccity(75%); filter: invert(75%);}</style>';
                }
            ?>
        </div>
    </body>
</html>