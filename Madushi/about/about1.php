<?php

require "../config/config.php";

if(isset($_POST["anj2"])){

$title=$_POST['qname'];
$ID=$_POST['eid'];
$ans1=$_POST['op1'];
$ans2=$_POST['op2'];
$ans3=$_POST['op3'];
$ans4=$_POST['op4'];
$ans5=$_POST['op5'];
$canswer=$_POST['aop'];


$sql="insert into question_table(exam_id,question_title,option1,option2,	option3,option4,option5,answer) values('$ID','$title','$ans1','$ans2','$ans3','$ans4','$ans5','$canswer')";


if($con->query($sql)){
		echo "<script type=\"text/javascript\">
            alert('Successfuly sent');
            </script>";
	}
	else{
		echo "Error:". $con->error;
	}
}
else{
	echo "Error";
}

if(isset($_POST["arun2"])){
$ID=$_POST['eid'];

$sql = "DELETE FROM question_table WHERE exam_id ='$ID'";


if($con->query($sql)){
		echo "<script type=\"text/javascript\">
            alert('Record deleted successfully');
            </script>";
        

	}
	else{
		echo "Error:". $con->error;
	}
}


$con->close();

?>


