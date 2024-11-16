<?php
    # leap year determining: Note: Century Years are not leap years.

    function isLeapYear($year){

        if ($year%4 !== 0 || $year%100 == 0  ){
            echo $year . " is not a leap year.";
        }else{
               echo $year . " is a leap year.";
        }
    }
    
   $input = trim(fgets(STDIN));

   isLeapYear($input);
