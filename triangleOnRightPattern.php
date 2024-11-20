<?php

    $n = 7;
    $i ;
    $space=$n;
    
    
    for($i = 0; $i<$n ; $i++ ){
          
       for($k=0;$k<$space;$k++){
                  echo" ";
                }
        $element="1";
        for($j=0;$j<=$i;$j++){
        echo $element;
             $element++;
        }
        print_r(PHP_EOL);
        $space--;
      
    }
?>
