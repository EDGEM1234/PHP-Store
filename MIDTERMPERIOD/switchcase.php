<html>
<head>
<title>Conditions</title>
</head>
<body>
<?php
switch(date("w")) {
case 1:
 echo "Now it's Monday";
 break;
case 2:
 echo "Now it's Tuesday";
 break;
case 3:
 echo "Now it's Wednesday";
 break;
case 4:
 echo "Now it's Thursday";
 break;
case 5:
 echo "Now it's Friday";
 break;
case 6:
 echo "Now it's Saturday";
 break;
default:
 echo "Now it's Sunday";
 break;
}
?>
</body>
</html>