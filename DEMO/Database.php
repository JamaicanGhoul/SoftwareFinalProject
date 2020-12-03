<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";
// Create connection
$conn = mysqli_connect($servername, $username,$password,$database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  
  $sql = "CREATE TABLE User (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  
} else {
  //echo "Table User created successfully";
    
}
}
$sql = "CREATE TABLE Sales (
Salesid INT(6) PRIMARY KEY,
userid VARCHAR(30) NOT NULL,
BurgerType VARCHAR(30) NOT NULL,
BQuantity INT(6) NOT NULL,
DrinksType VARCHAR(30) NOT NULL,
DQuantity INT(6) NOT NULL,
ChipsType VARCHAR(30) NOT NULL,
CQuantity INT(6) NOT NULL,
FruitType VARCHAR(30) NOT NULL,
FQuantity INT(6) NOT NULL
)";
    if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
    //echo "Table not created ";
    }
$sql = "CREATE TABLE Inventory (
Itemid INT(6) PRIMARY KEY,
Itemname VARCHAR(30) NOT NULL,
Itemcost INT(6) NOT NULL,
Quantity INT(6) NOT NULL
)";
    if ($conn->query($sql) === TRUE) {
  //echo "Database created successfully";
} else {
    //echo "Table not created ";
    }
$conn->close();
?>