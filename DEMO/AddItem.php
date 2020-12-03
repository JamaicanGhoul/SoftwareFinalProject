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
         
            <header>Add Item</header>
            <br/>
             <br/>
            <div id="icon-bar">
                <button id="search" class="button" onclick="searchfunction()">
                   <img src="img/search.png" height="25px">
                </button>
            </div>
    <div class="col-sm-12">
           <form class="form-horizontal" action="AddItem.php" method="post">
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
<a href="InventoryIndex.php"><button   class="btn btn-success">Back to Inventory</button></a></div>     
    </div>
    <?php 
    if(isset($_POST['ItemBtn'])){

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = "mydb";
        
    $itemName = $_POST['itemName'];
    $itemCost=  $_POST['itemCost'];
    $itemQ =  $_POST['itemQuant'];
    $itemNum = rand(1,100);  
        
$conn = mysqli_connect($dbhost, $dbuser,$dbpass,$database);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
    else{
$sql = "INSERT INTO Inventory(Itemid,Itemname,Itemcost,Quantity)VALUES ('$itemNum','$itemName','$itemCost','$itemQ')";
        
 $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      echo "Error creating table: " . $conn->error;
   }
    else{

   mysqli_close($conn);   
         
     }
    }
    }
    ?>
</body>

</html>