<?php

$to = "vandemataram1705@gmail.com";
$subject = "Registration";

$body= $_REQUEST['name'];
$body= $_REQUEST['email'];
$body= $_REQUEST['dob'];
$body= $_REQUEST['age'];
$body= $_REQUEST['male'];
$body= $_REQUEST['female'];
$body= $_REQUEST['transgender'];
$body= $_REQUEST['phone'];
$body= $_REQUEST['college'];

$ma = $_REQUEST['email'];
$header = "From:$ma";

$send=mail($to,$subject,$body,$header);

if($send)
{
    echo "information is sent";
}

else
{
    echo "failed";
}

?>