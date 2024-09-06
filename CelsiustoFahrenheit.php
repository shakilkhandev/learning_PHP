<?php
    # Write your PHP code from here

    function CelsiustoFahrenheit($input){

        $fahrenheit = number_format((((9/5) * $input) + 32 ),2);



        return  'The temperature in Fahrenheit is: '.$fahrenheit ;

    }

    $input = 28 ;
    
    echo CelsiustoFahrenheit($input);

   