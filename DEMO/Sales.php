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
         
         
            <header>Sales</header>
            <br/>
             <br/>
            <div id="icon-bar">
                <button id="search" class="button" >
                   <img src="img/search.png" height="25px">
                </button>
                <button class="button" > <a href="SalesIndex.php"><img src="img/add.png" width="25" height="25"></a>
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
$sql = "SELECT * FROM Sales";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>User ID</th><th>Burger Type</th><th>Burger Quantity</th><th>Drinks Type</th><th>Drinks Quantity</th><th>Chips Type</th><th>Chips Quantity</th><th>Fruit Type</th><th>Fruit Quantity</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["userid"]."</td><td>".$row["BurgerType"]."</td><td>".$row["BQuantity"]."</td><td>".$row["DrinksType"]."</td>
    <td>".$row["DQuantity"]."</td>
    <td>".$row["ChipsType"]."</td>
    <td>".$row["CQuantity"]."</td>
    <td>".$row["FruitType"]."</td>
    <td>".$row["FQuantity"]."</td></tr>";
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
