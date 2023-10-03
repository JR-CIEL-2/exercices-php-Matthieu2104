<?php

function triangle($nbligne){
    for ($i=0; $i<$nbligne;$i++)
    {
        for($y=0; $y<$i;$y++)
        {
            echo "*";
        }
        echo "<br>";
    }
}
$nl=20;
$url= triangle($nl);
echo "$url";
