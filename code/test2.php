<?php

$S = "ABCDEF";

$array = str_split($S);

var_dump($array);

foreach($array as $key => $lettre){

    echo $lettre.$key; 
}
