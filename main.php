<?php
$sessionId= $_POST["sessionId"];
$serviceCode=$_POST["serviceCode"];
$phoneNumber=$_POST["phoneNumber"];
$text=$_POST["text"];

if(text==""){
    //This is first request from user 
    $response="CON What would you want to check /n";
    $response="1. my account /n";
    $response="2. my phone number ";
}else if(text == "1"){
    //business level for 1st level response
    $response= "CON Choose acccount info you want to view /n";
    $response= "1.Account number /n";
    $response= "2. account balance";


}else if($text == "2"){
    $response= "END Your phone no is".$phoneNumber;
}else if ($text= "1*1"){
    $accountNUmber= "ACC101!";
    $response="END Your a/c no is ".$accountNUmber;
}
elseif($text =="1*2"){
    $balance=10000;
    $respone="END Your balance is". $balance;
}
header('Content-type; text/plain');
echo $response;


?>
