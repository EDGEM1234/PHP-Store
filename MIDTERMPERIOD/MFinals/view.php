<?php 
include "config.php";
$sql = "SELECT * FROM Products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<div class="topnav">
  <a class="active" href="view.php">Home</a>
  <a class="active" href="create.php">Add</a>
  <a class="active" href="update.php">Edit</a>
  <!-- <input type="text" placeholder="Search.."> -->
  <form id="form" role="search">
  <input type="search" id="query" name="q"
   placeholder="Search..."
   aria-label="Search through site content">
  <button>Search</button>
  <script src="./search.js"></script>
</form>
<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST["search"])) {
  // (B1) SEARCH FOR USERS
  require "search.php";

  // (B2) DISPLAY RESULTS
  if (count($results) > 0) { foreach ($results as $r) {
    printf("<div>%s - %s</div>", $r["name"], $r["email"]);
  }} else { echo "No results found"; }
}
?>
</div>
    <title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Edge Exotics Petshop</h2>
<table class="table">
    <thead>
    <tr>
        <th>Species</th>
        <th>Morph</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Hatchdate</th>
        <th>Gender</th>  
    </tr>
    </thead>
    <tbody> 
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['species']; ?></td>
                    <td><?php echo $row['morph']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td><?php echo $row['hatchdate']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>                       
        <?php       }
            }
        ?>                
    </tbody>
</table>
    </div> 
</body>
</html>
