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
         
            <header>Updating Inventory</header>
            <br/>
             <br/>
        <form class="form-horizontal" action="InventoryUpdate.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-4">Item Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="itemName" placeholder="Enter item name here">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">Item Cost:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="itemCost" placeholder="Enter item cost here">
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-4">Item Quantity:</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" name="itemQuant" placeholder="Enter item quantity here">
    </div>
  </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" name="ItemBtn" class="btn btn-success" >Submit</button>
      </div>
    </div>
</form> 
        <?php 
    if(isset($_POST['ItemBtn'])){

        
    $itemName = $_POST['itemName'];
    $itemCost=  $_POST['itemCost'];
    //$itemQ =  $_POST['itemQuant'];

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = "mydb";
         
$conn = mysqli_connect($dbhost, $dbuser,$dbpass,$database);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
    else{
$sql = "UPDATE Inventory SET Itemcost='$itemCost' WHERE Itemname='$itemName'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
     }
    }
    ?>
<a href="InventoryIndex.php"><button   class="btn btn-success">Back to Inventory</button></a>
    </div>
</body>

</html>