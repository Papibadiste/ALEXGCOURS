<?php
$S= "k9Akzejh21";

if(strlen($S) === 8){
    if(preg_match("#[A-Z ]#",$S)){
        if(preg_match("#[a-z ]#",$S)){
            if(preg_match("#[1-9 ]#",$S)){
                $result = "true";
            }else{
                $result = "false4";
            }
        }else{
            $result = "false3";
        }
    }else{
        $result = "false2";
    }
}else{
    $result = "false1";
}
switch ($S) {
    case !preg_match("#[A-Z ]#",$S):
        $result = "false2";
        break;
    case !preg_match("#[a-z ]#",$S):
        $result = "false1";
        break;
    case 1:
        echo "i égal 2";
        break;
    default:
        $result = "true";
        break;
}



if("true" === true){
    echo "oui";
}else{
    echo "oui2";
}