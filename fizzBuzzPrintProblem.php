<?php



/*
 * Complete the 'fizzBuzz' function below.
 *problem of  hacker rank 
 * The function accepts INTEGER n as parameter.
 */
 
 

function fizzBuzz($n) {
    // Write your code here
    for ($i=1; $i<=$n; $i++){
        if($i%3==0 && $i%5==0){
            echo "FizzBuzz";
        }
        else if($i%3==0 && $i%5!=0){
            echo "Fizz";
        }
         else if($i%3!=0 && $i%5==0){
            echo "Buzz";
            
        }else{
            echo $i ;
            };
        print_r(PHP_EOL);
    }

}
$n = intval(trim(fgets(STDIN)));
fizzBuzz($n);

