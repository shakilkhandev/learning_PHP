<?php
   
   function permute($str, $prefix = "") {
    $n = strlen($str);
    if ($n == 0) {
        echo $prefix ." ";// Printing the permutation
    } else {
        for ($i = 0; $i < $n; $i++) {
            permute(substr($str, 0, $i) . substr($str, $i + 1), $prefix . $str[$i]);
        }
    }
}




  $input = trim(fgets(STDIN));  
  permute($input);
?>
