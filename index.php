<?php
include_once("connection.php");
?>
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
    }else{
        echo "Failed to save data";
    }
}


?>
<?php

if(isset($_POST['searchdata'])){
    $search_id=$_POST['search'];
    $sql="Select * From empdata Where id= '$search_id'";
    $data=$conn->query($sql);
    $result=$data->fetch_assoc();
    //$name=$result['emp_name'];
    //echo $name;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Development</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php
if(isset($_POST['delete'])){
    $id=$_POST['search'];
    //echo $id;
    $sql="Delete From empdata Where id='$id'";
    $data= $conn->query($sql);
    if($data){
        echo "record deleted";
    }else{
        echo "failed to delete";
    }
}

?>

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
    }else{
        echo "Failed to update the record";
    }
}

?>

    <div class="container">
        <form action="#" method="post">
        <h2>Employee Data Entry Automation Software</h2>
        <div class="form">
            <input type="text" class="textfield" placeholder="Search ID" name="search" value="<?php if(isset($_POST['searchdata'])){
                echo $result['id'];
            }?>">
            <input type="text" class="textfield" placeholder="Employee Name" name="name" value="<?php if(isset($_POST['searchdata'])){
                echo $result['emp_name'];
            }?>">
            <select name="gender" class="textfield">
                <option value="Not selected">Select Gender</option>
                <option value="Male" <?php if($result['emp_gender'] =='Male'){
                    echo "selected";
                }?>>Male </option>
                <option value="Female" <?php if($result['emp_gender'] =='Female'){
                    echo "selected";
                }?>>Female</option>
                <option value="Other" <?php if($result['emp_gender'] =='Other'){
                    echo "selected";
                }?>>Other</option>
            </select>
            <input type="text" class="textfield" placeholder="Email Address" name="email" value="<?php if(isset($_POST['searchdata'])){
                echo $result['emp_email'];
            }?>">
            <select name="department" class="textfield" >
    
    
    
    
    
            <option value="Not Selected">Select Department</option>
                <option value="IT" <?php if($result['emp_department'] == 'IT'){
                    echo "selected";
                }?>>IT </option>
                <option value="Sales" <?php if($result['emp_department'] == 'Sales'){
                    echo "selected";
                }?>>Sales</option>
                <option value="Accounts" <?php if($result['emp_department']== 'Accounts'){
                    echo "selected";
                }?>>Accounts</option>
                <option value="Bussiness Development" <?php if($result['emp_department']== 'Bussiness Development'){
                    echo "selected";
                }?>>Business Development</option>
                <option value="Marketing" <?php if($result['emp_department']== 'Marketing'){
                    echo "selected";
                }?>>Marketing</option>
                <option value="HR" <?php if($result['emp_department']== 'HR'){
                    echo "selected";
                }?>>HR</option>
            </select>
            <textarea name="address" cols="20" rows="5" placeholder="Address"><?php if(isset($_POST['searchdata'])){ echo $result['emp_address'];}?></textarea>
            <input type="submit" value="Search" class="btn" name="searchdata" >
            <input type="submit" value="Save" name="save" class="btn" style="background-color:green;" onclick="return alert('Are you sure you want save this record?')">
            <input type="submit" value="Update" name="update" class="btn" style="background-color:orange;" onclick="return confirm('Are you sure you want to update this record?')">
            <input type="submit" value="Delete" name="delete" class="btn" style="background-color:red;" onclick="return confirm('Are you sure you want to delete this record?');">
            <input type="submit" value="Clear" name="clear" class="btn" style="background-color:blue;">
        </div>
        </form>
    </div>
</body>
</html>