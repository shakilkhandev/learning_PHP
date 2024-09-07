<?php
    # Write your PHP code from here
    

    # If  taking three floating number from console
    #THen use "   $input = trim(fgets(STDIN)); "

    $input = "30 40 50";
    $numArray  = explode(" ",$input);

    list($num1,$num2,$num3) = $numArray ;

    echo "Average: ".number_format((($num1+$num2+$num3)/3 ),2);