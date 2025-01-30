<?php
    # Write your PHP code from here

    function findDiscount($price,$discount){
         
        // can be used  the formula :   return  $price * (1 - $discount / 100);
        
       return  $price - $price * (1*$discount/100);

    };

    $input = explode(" " , trim(fgets(STDIN)));
    
    list($a,$b) = $input ;

    echo "Price: " . number_format(findDiscount($a,$b),2);

     
?>
