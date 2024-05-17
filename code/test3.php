<?php
$S= "kA9kzejh2";

if(strlen($S) > 8){
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

echo $result;