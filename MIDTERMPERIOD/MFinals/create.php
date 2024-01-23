<?php 
include "config.php";
  if (isset($_POST['submit'])) {
    $species = $_POST['species'];
    $morph = $_POST['morph'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $hatchdate = $_POST['hatchdate'];
    $gender = $_POST['gender'];
    $sql = "INSERT INTO `Products`(`species`, `morph`, `price`, `stock`, `hatchdate` ,`gender`) VALUES ('$species','$morph','$price','$stock','$hatchdate' ,'$gender')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }
?>
 
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style2.css">
</head>
<div class="topnav">
  <a class="active" href="view.php">Home</a>
  <a class="active" href="create.php">Add</a>
  <!-- <input type="text" placeholder="Search.."> -->
 
</div>
<body>
<h2>Edge Exotics</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Product information:</legend>
    Species:<br>
    <input type="text" name="species">
    <br>
    Morph:<br>
    <input type="text" name="morph">
    <br>
    Price:<br>
    <input type="text" name="price">
    <br>
    Stock:<br>
    <input type="text" name="stock">
    <br>
    Hatchdate:<br>
    <input type="date" name="hatchdate" value="<?php echo date('Y-m-d'); ?>" />
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>
