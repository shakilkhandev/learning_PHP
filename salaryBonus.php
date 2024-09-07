<?php
    # Write your PHP code from here
    #$salary = trim(fgets(STDIN));  for console input 

    $salary = 50000.55 ;

    $bonusRate = 10 ;


    $bonus  =  floor(($bonusRate / 100) * $salary);  #floor use to make floating point to low-nearest integer such as  3.7 = 3 .

    echo $bonus;