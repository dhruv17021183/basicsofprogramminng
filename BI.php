<?php

// Write your code here
$String = readline();
$length = strlen($String);
$j=0;
while($j<=9){
    $count=0;
    for($i=0;$i<$length;$i++){
        // if(strpos($i),)
        if($j==$String[$i]){
            $count++;
        }
    }
    echo $j." ".$count;
    echo "\n";
    // $count=0;
    $j++;
}
?>