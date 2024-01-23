<html>
<body>
<?php
/* First method to associate create array. */
$student_one = array("Maths"=>95, "Physics"=>90,  
                  "Chemistry"=>96, "English"=>93,  
                  "Computer"=>98); 
echo "Student one is ". $grades['Maths"=>95'] . "<br />";
echo "Student one is ". $grades['Physics"=>90']. "<br />";
echo "Student one is ". $grades['Chemistry"=>96']. "<br />";
echo "Student one is ". $grades['English"=>93']. "<br />";
echo "Student one is ". $grades['Computer"=>98']. "<br />";
/* Second method to create array. */
$student_two["Maths"] = 95; 
$student_two["Physics"] = 90; 
$student_two["Chemistry"] = 96; 
$student_two["English"] = 93; 
$student_two["Computer"] = 98;
echo "Student two on Math = 95 ". $salaries['Maths'] . "<br />";
echo "Student two on Physics = 90 ". $salaries['Physics']. "<br />";
echo "Student two on Chemistry = 96 ". $salaries['Chemistry']. "<br />";
echo "Student two on English = 93 ". $salaries['English']. "<br />";
echo "Student two on Computer = 98 ". $salaries['Computer']. "<br />";
?>
</body>
</html>