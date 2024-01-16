<?php

if(isset($_POST['update'])){

    $id= $_POST['search'];
    $name= $_POST['name'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $department= $_POST['department'];
    $address= $_POST['address'];

    $sql="Update empdata Set emp_name='$name',emp_gender='$gender',emp_email='$email',emp_department='$department',emp_address='$address' Where id='$id'";
    $data=$conn->query($sql);

    if($data){
        //echo "Updated the Record";
        header('location:index.php');
    }else{
        echo "Failed to update the record";
    }
}

?>
