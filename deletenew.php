
<?php
	include_once 'config.php';
?>
<?php
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `jobpost` where jobID=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            //echo "Deleted Successfully";
            header('location:myJobPosts.php');
        }
        else{
            die(mysqli_error($conn));
        }


    }

?>