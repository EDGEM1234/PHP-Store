<html>
<head>
<title>Conditions</title>
</head>
<body>
<?php
if (date("m") >= 3 && date("m") <= 5) {
 echo "<p> Now it's spring!</p> ";
}
else {
 echo "<p> Now it's either winter, summer or autumn!</p> ";
}
?>
</body>
</html>