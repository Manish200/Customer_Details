<?php
session_start();

// initializing variables
$username = "";
$address    = "";
$contact_1 = "";
$contact_2 = "";
$errors = array();

// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'customer_details');

$db = mysqli_connect("localhost", "root", "", "mysql");

if (!$db) {
    echo "Error: Unable to connect ma   to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

else{
  echo "Connected to database \r\n \r\n";
  echo "<br>";

if (isset($_POST['aadd'])) {

    echo "   Button Clicked  \r\n \r\n" ;
    echo "<br>";
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $contact_1 = mysqli_real_escape_string($db, $_POST['contact_1']);
  $contact_2 = mysqli_real_escape_string($db, $_POST['contact_2']);


  if (empty($username))  { array_push($errors, "Name is required"); }
  if (empty($address))   { array_push($errors, "Address is required"); }
  if (empty($contact_1)) { array_push($errors, "Conatct 1 info is required"); }
  if (empty($contact_2)) { array_push($errors, "Conatct 2 info is required"); }


// Finally, register user if there are no errors in the form
if (count($errors) == 0) {
  //$password = md5($password_1);encrypt the password before saving in the database

$id = 2;  //Just checking if the values are inserted or not
$ba = 0;  //Just checking if the values are inserted or not

$query = "INSERT INTO customer_details(id,customer_name, customer_address, customer_conatact1,customer_conatact2,balance)
        VALUES('".$id."','".$username."', '".$address."', '".$contact_1."','".$contact_2."','".$ba."')";
        $gg = $query;
  mysqli_query($db, $query);
  if($gg)
  {
    echo " \r\n The query is excuted  \n";
  }
}


}
}
?>
