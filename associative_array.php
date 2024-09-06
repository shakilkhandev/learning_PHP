<?php

$array = ["Name" => "Shakil", "Age" => 26, "Location" => "Gazipur"];  //associative array declared 

echo $array["Name"] . "'s age is " . $array['Age']; //accessing the array  values.


print PHP_EOL;          // this will make a new line.after the previous.


//echo $array[1];   //this will through an error as associative array cannot access by index position 


echo "Foreach just value :\n ";
//looping through the associative array 
foreach ($array as $items) {

    echo $items ." "; //this will just print the values not the key. 
}
;


echo "\nKeys and Values of the associtative Array : \n";
foreach ($array as $key => $value) {

    echo $key . " : " . $value ;     //this will print key also the value Ex"Name : Shakil" 

    if ($key=='Location') { //if conditon is used to give fullstop after the line end. as location is end item.we use that as a checkable item. 
        echo ".";
    }
    else{
        echo ", ";
    }
}
;