<?php

// we catch all the data from the user and we can do whatever we want with it

$User_Firstname = $_POST['firstname'];
$User_Lastname = $_POST['lastname'];
$User_Email = $_POST['email'];
$User_Phone = $_POST['phone'];
$User_Message = $_POST['message'];

echo "First name: " . $User_Firstname . "<br>";
echo "Last name: " . $User_Lastname . "<br>";
echo "Email: " . $User_Email . "<br>";
echo "Phone: " . $User_Phone . "<br>";
echo "Message: " . $User_Message . "<br>";

