<?php

$S = "ABCDEF";

$array = str_split($S);

var_dump($array);

for($i=0; $i < count($array) ; $i=$i+2){
    echo $array[$i];
    
}
