<html>
<head>
<title>Conditions</title>
</head>
<body>
<?php
if (date("m") >= 3 && date("m") <= 5) {
 echo "<p>Now it's spring!</p>";
}
elseif (date("m") >= 6 && date("m") <= 8) {
echo "<p>Now it's summer!</p>";
}
elseif (date("m") >= 9 && date("m") <= 11) {
 echo "<p>Now it's autumn!</p>";
}
else {
 echo "<p>Now is winter!</p>";
}
?>
</body>
</html>