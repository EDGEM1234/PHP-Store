<?php 
include "config.php";
    if (isset($_POST['update'])) {
        $species = $_POST['species'];
        $user_id = $_POST['id'];
        $morph = $_POST['morph'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $hatchdate = $_POST['hatchdate'];
        $gender = $_POST['gender']; 
        $sql = "UPDATE `Products` SET `species`='$species',morph`='$morph',`price`='$price',`stock`='$stock',`gender`='$gender' WHERE `id`='$user_id'"; 
        $result = $conn->query($sql); 
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
if (isset($_GET['id'])) {
    $user_id = $_GET['id']; 
    $sql = "SELECT * FROM Products WHERE id=". $user_id ;
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $species = $row['species'];
            $morph = $row['morph'];
            $price = $row['price'];
            $stock  = $row['stock'];
            $hatchdate  = $row['hatchdate'];
            $gender = $row['gender'];
            $id = $row['id'];
        } 
    ?>
    <link rel="stylesheet" href="style2.css">
    <div class="topnav">
  <a class="active" href="view.php">Home</a>
  <a class="active" href="create.php">Add</a>
  <a class="active" href="update.php">Edit</a>
  <!-- <input type="text" placeholder="Search.."> -->
 
</div>
<h2>Edge Exotics Update Form</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Product information:</legend>
    Species:<br>
    <input type="text" name="species" value="<?php echo $species; ?>">
    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
    <br>
    Morph:<br>
    <input type="text" name="morph" value="<?php echo $morph; ?>">
    <br>
    Price:<br>
    <input type="text" name="price" value="<?php echo $price; ?>">
    <br>
    Stock:<br>
    <input type="text" name="stock" value="<?php echo $stock; ?>">
    <br>
    Hatchdate:<br>
    <input type="date" name="hatchdate" value="<?php echo $hatchdate; ?>">
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="Male" <?php if($meat == 'Male'){ echo "checked";} ?> >Male
    <input type="radio" name="gender" value="Female" <?php if($meat == 'Female'){ echo "checked";} ?> >Female
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
        </body>
        </html> 
    <?php
    } else{ 
        header('Location: read and view.php');
    } 
}
?>