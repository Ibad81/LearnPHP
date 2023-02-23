<?php

$val=1;
$step=8;
for($var=0;$var<$step;$var++){
    for($var1=0;$var1<=$var;$var1++){
        echo $val++." ";
    }
    echo "<br>";
}

?>