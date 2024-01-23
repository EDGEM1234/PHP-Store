<html>
<head>
<title>Loops </title>
</head>
<body>
<?php
for ($intRed=0; $intRed<=255; $intRed=$intRed+30) {
 for ($intGreen=0; $intGreen<=255; $intGreen=$intGreen+30) {
 for ($intBlue=0; $intBlue<=255; $intBlue=$intBlue+30) {
 $StrColor = "rgb(" . $intRed . "," . $intGreen . "," . $intBlue . ")";

 echo "<span style='color:" . $StrColor . "'>" . $StrColor . "</span>";
 }
 }
}
?>
</body>
</html>