<?php
$conn= new mysqli("localhost","root","","employee");

if(!$conn){
    echo "Connection failed";
}else{
    echo "Connection create";
}


?>