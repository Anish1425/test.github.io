<?php 
function findRepeating($arr, $n) 
{ 
    $missingElement = 0; 
  

    for ($i = 0; $i < $n; $i++) 
    { 
  
        $element = $arr[abs($arr[$i])]; 
  
        if($element < 0) 
        { 
            $missingElement = $arr[$i]; 
            break; 
        } 
      
    $arr[abs($arr[$i])] = -$arr[abs($arr[$i])]; 
} 
  
return abs($missingElement); 
  
} 
  
 
$arr = array (0,1,2,3,4,5,6,7,.......................101); 
  
$n = sizeof($arr); 
  
echo findRepeating($arr, $n); 
  
?> 
