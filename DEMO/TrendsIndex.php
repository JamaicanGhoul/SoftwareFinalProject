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
         
         
            <header>Trends</header>
            <br/>
             <br/>
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
$sql = "SELECT COUNT(Salesid) AS NumberOfSales  FROM Sales";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "<h2>Total of sales =".$row["NumberOfSales"]."</h2>";
  }
 
     }
    }
    ?>
<a href="MainMenu.php"><button   class="btn btn-success">Back to Main Menu</button></a>
</div>
</body>
</html>