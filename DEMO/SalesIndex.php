<?php 
include('Database.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script id="applicationScript" type="text/javascript" src="js\sales_script.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/sals_style.css">
<title>Sales</title>
<style>
.SalesImg{
    width: 80px ;
    height: 60px ;
}
</style>
</head>
<body>
 <div id="main-container">
     <header>Sales </header>
     <br/><br/><br/>
<form action="SalesIndex.php" method="post">   
    <table style="width: 100%;" class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img class="SalesImg" src="img/burger.png"></td>
        <td><div class="form-group">
      <label>Type of Burger:</label>
      <select class="form-control" name="TypeBurger">
        <option>none</option>
        <option>Beef</option>
        <option>Chicken</option>
        <option>Fish</option>
            </select>
            </div>
          </td>
        <td><label for="quantity"># of Burgers (1-10):</label><br><input type="number" id="quantity" name="Burgerquant">
        </td>
      </tr>
      <tr>
        <td><img class="SalesImg" src="img/Drinks.png"></td>
        <td><div class="form-group">
      <label>Type of Drinks:</label>
      <select class="form-control" name="TypeDrinks" >
        <option>none</option>
        <option>Pepsi</option>
        <option>Cocoa Cola</option>
        <option>Wata</option>
        </select>
            </div></td>
        <td><label for="quantity"><br>#  of Drinks (1-10):</label><br><input type="number" id="quantity" name="Drinkquant" ></td>
      </tr>
      <tr>
        <td><img class="SalesImg" src="img/chips.png"></td>
        <td><div class="form-group">
      <label>Type of Chips:</label>
      <select class="form-control" name="TypeChips" >
        <option>none</option>
        <option>Soldanza</option>
        <option>Cheetos</option>
        <option>Doritos</option>
        </select>
            </div></td>
        <td><label for="quantity"># of Chips (1-10):</label><br><input type="number" id="quantity" name="Chipsquant" ></td>
      </tr>
        <tr>
        <td><img class="SalesImg" src="img/fruit.png"></td>
        <td><div class="form-group">
      <label>Type of Fruits:</label>
      <select class="form-control" name="TypeFruit" >
       <option>none</option>   
        <option>Banana</option>
        <option>Orange</option>
        <option>Pineapple</option>
        </select>
            </div></td>
        <td><label for="quantity"># of Fruits (1-10):</label><br><input type="number" id="quantity" name="Fruitquant" ></td>
      </tr>
    </tbody>
  </table> 
   <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" name="SubmitBtn" class="btn btn-success" >Check Out</button>
      </div>
    </div> 
</form>
<?php 
     if(isset($_POST['SubmitBtn'])){

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = "mydb";
         
    $BurgerT = $_POST['TypeBurger'];
    $BurgerQuant = $_POST['Burgerquant'];   
    $DrinkT= $_POST['TypeDrinks'];
    $Drinkquant= $_POST['Drinkquant'];
    $ChipsT = $_POST['TypeChips'];
    $Chipsquant =$_POST['Chipsquant'];
    $FruitT = $_POST['TypeFruit'];
    $Fruitquant =$_POST['Fruitquant'];
    $salesid = rand(1,100);
    $userid = $_SESSION['id'];
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$database);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
    else{
$sql = "INSERT INTO Sales(Salesid,userid,BurgerType,BQuantity,DrinksType,DQuantity,ChipsType,CQuantity,FruitType,FQuantity)VALUES ('$salesid','$userid','$BurgerT','$BurgerQuant','$DrinkT','$Drinkquant','$ChipsT','$Chipsquant','$FruitT','$Fruitquant')";
        
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
<center><div style="top:10px; position:relative;">
<a href="Sales.php"><button class="btn btn-success">Back to Sales</button></a></div></center></div>
</body>
</html>
