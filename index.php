<?php
include_once("connection.php");
$sql="Select * from empdata Where 1";
$result=$conn->query();
$row=array();
print_r($row);
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




    <div class="container">
        <form action="#" method="post">
        <h2>Employee Data Entry Automation Software</h2>
        <div class="form">
            <input type="text" class="textfield" placeholder="Search ID" name="search" value="<?php if(isset($_POST['searchdata']) && isset($result['id']) ){
                echo $result['id'];
            }?>">
            <input type="text" class="textfield" placeholder="Employee Name" name="name" value="<?php if( isset($_POST['searchdata']) && isset($result['emp_name']) ){
                echo $result['emp_name'];
            }?>">
            <select name="gender" class="textfield">
                <option value="Not selected">Select Gender</option>
                <option value="Male" <?php if(isset($_POST['searchdata']) && isset($result['emp_gender']) && $result['emp_gender'] =='Male'){
                    echo "selected";
                }?>>Male </option>
                <option value="Female" <?php if( isset($_POST['searchdata']) && isset($result['emp_gender']) && $result['emp_gender'] =='Female'){
                    echo "selected";
                }?>>Female</option>
                <option value="Other" <?php if( isset($_POST['searchdata']) && isset($result['emp_gender']) && $result['emp_gender'] =='Other'){
                    echo "selected";
                }?>>Other</option>
            </select>
            <input type="text" class="textfield" placeholder="Email Address" name="email" value="<?php if(isset($_POST['searchdata']) && isset($result['emp_email'])  ){
                echo $result['emp_email'];
            }?>">
            <select name="department" class="textfield" >
              <option value="Not Selected">Select Department</option>
                <option value="IT" <?php if( isset($_POST['searchdata']) && isset($result['emp_department']) &&   $result['emp_department'] == 'IT'){
                    echo "selected";
                }?>>IT </option>
                <option value="Sales" <?php if( isset($_POST['searchdata']) && isset($result['emp_department']) && $result['emp_department'] == 'Sales'){
                    echo "selected";
                }?>>Sales</option>
                <option value="Accounts" <?php if( isset($_POST['searchdata']) && isset($result['emp_department']) && $result['emp_department']== 'Accounts'){
                    echo "selected";
                }?>>Accounts</option>
                <option value="Bussiness Development" <?php if( isset($_POST['searchdata']) && isset($result['emp_eemp_departmentmail']) && $result['emp_department']== 'Bussiness Development'){
                    echo "selected";
                }?>>Business Development</option>
                <option value="Marketing" <?php if( isset($_POST['searchdata']) && isset($result['emp_department']) && $result['emp_department']== 'Marketing'){
                    echo "selected";
                }?>>Marketing</option>
                <option value="HR" <?php if( isset($_POST['searchdata']) && isset($result['emp_department']) && $result['emp_department']== 'HR'){
                    echo "selected";
                }?>>HR</option>
            </select>
            <textarea name="address" cols="20" rows="5" placeholder="Address"><?php if( isset($result['emp_address'])){ echo $result['emp_address'];}?></textarea>
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