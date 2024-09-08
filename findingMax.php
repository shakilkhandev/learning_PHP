<?php
    # Write your PHP code from here
     $input ="10 20 30";
      
    list($num1,$num2,$num3) = explode(" ", $input) ;

    $maxNumber =  max($num1,$num2,$num3);

    echo $maxNumber ;

   



