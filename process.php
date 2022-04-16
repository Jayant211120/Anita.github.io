<?php
$servername='localhost';
$username='root';
$password='';
$database='jayantPort';
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $mobile=$_POST['mobile'];
    $comment=$_POST['comment'];
    $sql="INSERT INTO `folio`VALUES('$name','$mail','$mobile','$comment')";
    if(mysqli_query($conn,$sql)){
       echo "Your Record Is Successfully Inserted";
    }
    else{
        echo "Your data is not inserted ? Try Again".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>