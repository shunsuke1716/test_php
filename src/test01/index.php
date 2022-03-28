<?php
echo"<table border=1>";


for($i = 1; $i <= 9; $i++){
    $nx1=$i*1;
    $nx2=$i*2;
    $nx3=$i*3;
    $nx4=$i*4;
    $nx5=$i*5;
    $nx6=$i*6;
    $nx7=$i*7;
    $nx8=$i*8;
    $nx9=$i*9;
    echo "<tr><td>$nx1</td><td>$nx2</td><td>$nx3</td><td>$nx4</td><td>$nx5</td><td>$nx7</td><td>$nx8</td><td>$nx9</td></tr>";
    }

echo "</table>";