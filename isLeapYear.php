<?php
    # leap year determining: Note: Century Years are not leap years(Ex:1900) only if divisible by 400.(Ex:2000) 

    function isLeapYear($year){

        if ($year%4 !== 0 || ($year%100 == 0 && $year%400 !=0 )){
            echo $year . " is not a leap year.";
        }else{
               echo $year . " is a leap year.";
        }
    }
    
   $input = trim(fgets(STDIN));

   isLeapYear($input);
