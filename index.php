<?php

$firstname=$_REQUEST['firstname'];
$secondname=$_REQUEST['secondname'];
$address=$_REQUEST['address'];


if(isset($_POST['btntest']))

{

    $host="localhost";
    $user="root";
    $password="";
    $db="bis_level_four";

    $conn = myqli_connect($host,$user,$password,$db);


    $insert= "insert into studentsbisinfo values('$firstname','$secondname','$address')";

    mysqli_query($conn,$insert);

if($conn){
    echo("<h1 style='color:green;'>Your Registraction is Done!</h1>");
}
else{
    echo("<h1 style='color:red;'Your Registraction is failed!</h1");

}




}



    