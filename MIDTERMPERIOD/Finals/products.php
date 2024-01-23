<?php
    if (isset($_POST['submit']))
    {
        if ((!isset($_POST['firstname'])) || (!isset($_POST['lastname'])) ||
        (!isset($_POST['address'])) || (!isset($_POST['emailaddress'])) ||
        (!isset($_POST['password'])) || (!isset($_POST['gender'])))
    {
        $error = "*" . "Please fill all the required fields";
    }
    else
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $emailaddress = $_POST['emailaddress'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edge Exotics</title>
</head>
<body>
<h1>Edge Exotics Store</h1>
<fieldset>
<form id="form1" method="post" action="formdisplay.php">
	<?php
		if (isset($_POST['submit']))
		{
			if (isset($error))
			{
				echo "<p style='color:red;'>"
					. $error . "</p>";
			}
		}
		?>
		Species:
		<input type="text" name="Species"/>
		<span style="color:red;">*</span>
		<br>
		<br>
		Morph:
		<input type="text" name="Morph"/>
		<span style="color:red;">*</span>
		<br>
		<br>
		Price:
		<input type="text" name="Price"/>
		<span style="color:red;">*</span>
		<br>
		<br>
		Stock:
		<input type="text" name="Stock"/>
		<span style="color:red;">*</span>
		<br>
		<br>
		Level of care:
		<input type="password" name="password"/>
		<span style="color:red;">*</span>
		<br>
        <br>
        Hatchdate:
        <input type="date"/>
		<span style="color:red;">*</span>
		<br>
		<br>
		Gender:
		<input type="radio"
		value="Male"
		name="gender"> Male
		<input type="radio"
		value="Female"
		name="gender">Female
		<br>
		<br>
		<input type="submit" value="Submit" name="submit" />
		</form>
		</fieldset>
		<?php
			if(isset($_POST['submit']))
				{
					if(!isset($error))
						{
								echo"<h1>INPUT RECEIVED</h1><br>";
								echo "<table border='1'>";
								echo "<thead>";
								echo "<th>Parameter</th>";
								echo "<th>Value</th>";
								echo "</thead>";
								echo "<tr>";
								echo "<td>Species</td>";
								echo "<td>".$species."</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>Morph</td>";
								echo "<td>".$morph."</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>Price</td>";
								echo "<td>".$price."</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>Stock</td>";
								echo "<td>" .$stock."</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>Level of care</td>";
								echo "<td>".$levelofcare."</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>Gender</td>";
								echo "<td>".$gender."</td>";
								echo "</tr>";
								echo "</table>";
						}
				}
		?>
</body>
</html>