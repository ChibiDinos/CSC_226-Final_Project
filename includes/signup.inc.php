<?php
session_start();
if(isset($_POST['signup'])
   {
    $user = trim($_REQUEST('username');
    $pass = trim($_REQUEST('password');

    /* again database connections needed, assume mysql
    
    //can remove customer name details from the created customer table in the email
    
    $query = "INSERT INTO Customer VALUES ('$user', '$pass'); //the id will auto increment
    $response = mysqli_query($dbc, $query); //where $dbc is the database connetion
    
    if($reponse)
    {
      //on a sucessful creation
      $_SESSION['login_user] = $user;
      header("location: home.php");
    }
   
    
    */
                 
                 
    /*
    In addition, we need a session file, that verifies the session, so make this a new file
    
    <?php
   include('dbconnection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>
    
    */
   }

?>
