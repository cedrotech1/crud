<?php
 $connection=mysqli_connect("localhost","root","","mydb");
$id=$_GET['id'];
$result=mysqli_query($connection,"delete from student where id=$id");
if($result){
    echo"<script>window.location.href='index.php'</script>";
}

?>