<?php

$to = "vandemataram1705@gmail.com";
$subject = "Registration";

$body= $_REQUEST['name'];
$body= $_REQUEST['email'];


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
