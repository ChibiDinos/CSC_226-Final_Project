<?php
  session_start();
  include('dbconnect.inc.php');
  $status="";
  
  if (isset($_POST['']) && $_POST['']!="")
  {
    $code = $_POST[''];
    $result = mysqli_query($con, "SELECT * FROM `Products` WHERE ``=''"); // needs id values
    $row = mysqli_fetch_assoc($result);
    $name = $row['Name'];
    $price = $row['Price'];

    $cartArray = array(
    $code=>array(
    'name'=>$name,
    'price'=>$price,
    'quantity'=>1,
    'image'=>$image)
);
 
if(empty($_SESSION["shopping_cart"])) 
{
  $_SESSION["shopping_cart"] = $cartArray;
  $status = "<div class='box'>Product is added to your cart!</div>";
}
else
{
  $array_keys = array_keys($_SESSION["shopping_cart"]);
  if(in_array($code,$array_keys)) 
  {
    $status = "<div class='box' style='color:red;'> Product is already added to your cart!</div>";} 
    else {
    $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"], $cartArray);
    $status = "<div class='box'>Product is added to your cart!</div>";
 }
 }
}
?>
