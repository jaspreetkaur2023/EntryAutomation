<?php

include_once('connection.php');

if(isset($_POST['searchdata'])){
    $search_id=$_POST['search'];
    $sql="Select * From empdata Where id= '$search_id'";
    $data=$conn->query($sql);
    $result= $data->fetch_assoc();
    $name=$result['emp_name'];
    echo $name;
}


?>