<?php
if(isset($_POST["submit"])){

    $connection=mysqli_connect("localhost","root","","mydb");
    // GET DATA FROM FORM
    $id=$_POST['id'];
    $n=$_POST['name'];
    $a=$_POST['address'];
    $age=$_POST['age'];
    // insert data
    $result=mysqli_query($connection,"UPDATE `student` SET 
    `names`='$n',`address`='$a',`age`='$age' WHERE id=$id");
    if($result){
        
        echo"<script>window.location.href='index.php'</script>";
    }

}

?>