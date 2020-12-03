<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/inventory_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/sals_style.css">
</head>
    <title>Inventory</title>

<body>
    <div class="main-container">
         
            <header>Inventory</header>
            <br/>
             <br/>
            <div id="icon-bar">
                <button id="search" class="button" onclick="searchfunction()">
                   <img src="img/search.png" height="25px">
                </button>
                <button class="button" > <a href="AddItem.php"><img src="img/add.png" width="25" height="25"></a>
                </button>
            </div>
        <?php 
    

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = "mydb";
        
      
        
$conn = mysqli_connect($dbhost, $dbuser,$dbpass,$database);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
    else{
$sql = "SELECT * FROM Inventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Item ID</th><th>Item Name</th><th>Item Cost</th><th>Item Quantity</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Itemid"]."</td><td>".$row["Itemname"]."</td><td>".$row["Itemcost"]."</td><td>".$row["Quantity"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
  }
     }
    ?>
<a href="MainMenu.php"><button   class="btn btn-success">Back to Main Menu</button></a>
    </div>
</body>

</html>