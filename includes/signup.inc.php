<?php

if(isset($_POST['signup']))
{
include "dbconnect.php";

//Grab submitted values.
$user = trim(stripslashes(htmlspecialchars($_POST['username'])));
$pass = trim(stripslashes(htmlspecialchars($_POST['password'})));
$firstName = trim(stripslashes(htmlspecialchars($_POST['fName'])));
$lastName = trim(stripslashes(htmlspecialchars($_POST['lName'])));
$email = trim(stripslashes(htmlspecialchars($_POST['email'])));


/* Need to perform a check if there are any accounts with these credentials.
   if there are any rows returned, need to tell them to enter in new values. */
$query1 = "SELECT * FROM Customers WHERE username = ? AND email = ?";
$stmt1 = $conn->prepare($query1);
$stmt1->bind_param("s", $user, $email);
$stmt1->execute();

$result = $stmt1->get_result();
if($result->num_rows === 0) //If there were any rows returned, cannot make due to same credentials.
{
	/* Second query, to insert any values. */
	$query2 = "INSERT INTO Customers (id, username, firstN, lastN, password, email) VALUES (NULL, ?, ?, ?, ?, ?);"
	$stmt2 = $conn->prepare($query2);
	$stmt2->bind_param("s", $user, $firstName, $lastName, $pass, $email);
	$stmt2->execute();

	/* User Successful Creation Message */
}
else
{
	/* Can change to what you want outputs to be, this just ensures nothing is
	   done */
	echo "Cannot make, account already exists.";
}
}

?>
