<?php
function check($grade){
    if($grade > 50){
        echo "Pass"; 
    }
    else{
        echo "Fail";
    }
}
  
// Driver Code
$grade = 39;
check($grade)
?>
