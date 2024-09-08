<?php
    # Write your PHP code from here
   
   function calculateMinimumValue($n , $array){
               $low = 0 ;
               $high = $n - 1 ;

        while ($low < $high){
           
           $mid = $low + (int)(($high - $low)/2);

           if($array[$mid]>$array[$high])
           
           {
                $low = $mid+1 ;
           }           
           
           else {
              
             $high = $mid ;

           }
         



        }

         return $array[$low];

   }



   #$n = (int)trim(fgets(STDIN));   #for use console input of the size of the array .
   #$rotatedArray = array_map('intval', explode(' ', trim(fgets(STDIN))));   #for array element from console by user must use space between each element .
    
   $n = 7 ;
   $rotatedArray = [30,40,50,60,70,0,10,20] ; #output should be 0 . as it is minimum value


   $minValue = calculateMinimumValue($n,$rotatedArray);

   echo $minValue ;

