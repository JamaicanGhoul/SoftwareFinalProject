<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Registration</title>
</head>
<body>
<div class="main-container">
<div class="Background">
<img src="img/Background_A0_Rectangle_2_pattern.png" alt="fruitcover" height="520" >
</div>
<header class="text-center">Registration</header>
<div class="col-sm-1"></div>
<div class="col-sm-9">
<form class="form-horizontal" action="Registration.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Email:</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" name="email" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="pwd">Password:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="pwd" placeholder="Enter password">
    </div>
  </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" name="SubmitBtn" class="btn btn-default" >Submit</button>
      </div>
    </div>
</form>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration Process</h4>
        </div>
        <div class="modal-body">
          <p>Your email and password has been registered</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>        
    </div>
    <?php
        
        
    if(isset($_POST['SubmitBtn'])){
        
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = "mydb";
        
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$database);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
    else{
$sql = "INSERT INTO User(username,password)VALUES ('$email','$password')";
        
 $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      echo "Error creating table: " . $conn->error;
   }
    else{

   mysqli_close($conn);
        
echo "<script>        
         $('#myModal').modal();    
    </script>";
        
        echo "<script>
        setTimeout(function(){ 
        window.location='index.php'; }, 3000);      
        </script>";
    }
    }
        
    }
    
    
    ?>
    <script src="js/main.js"></script>
</body>
</html>