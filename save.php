<?php
include_once("connection.php");?>

<?php
if(isset($_POST['save']) && !empty($_POST['save'])){

    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $department=$_POST['department'];
    $address=$_POST['address'];

    $sql="Insert Into empdata(`id`,`emp_name`,`emp_gender`,`emp_email`,`emp_department`,`emp_address`) 
    
    
    Values(NULL,'$name','$gender','$email','$department','$address');";
    $data= $conn->query($sql);
    if($data){
        //echo "Data save into database";
        header('location:index.php');
    }else{
        echo "Failed to save data";
        header('location:index.php');
    }
}


?>