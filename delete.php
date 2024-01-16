<?php
if(isset($_POST['delete'])){
    $id=$_POST['search'];
    //echo $id;
    $sql="Delete From empdata Where id='$id'";
    $data= $conn->query($sql);
    if($data){
        //echo "record deleted";
        header('location:index.php');
    }else{
        echo "failed to delete";
    }
}

?>