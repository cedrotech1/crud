<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
    <form action="index.php" method="post">
       <input type="text" name='name' placeholder="ENTER NAMES"><br>
       <input type="text" name='address' placeholder="ENTER ADDRESS"><br>
       <input type="number" name='age' placeholder="ENTER AGE"><br>
       <button type='submit' name='submit'>SAVE</button>
    </form>

    <table border="2" width='300'>
        <tr>
            <td>id</td>   <td>name</td>   <td>address</td>   <td>age</td><td>modify</td>
        </tr>
        <?php
         $connection=mysqli_connect("localhost","root","","mydb");
         $result=mysqli_query($connection,"select * from student");
         while($row=mysqli_fetch_array($result)){
            ?>
              <tr>
                <td><?php echo $row['id'];?></td> 
                <td><?php echo $row['names'];?></td>  
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['age'];?></td> 
                <td>
                    <a href="delete.php?id=<?php echo $row['id'];?>"><button>delete</button></a>
                    <a href="update.php?id=<?php echo $row['id'];?>"><button>update</button></a>
                </td> 
            </tr>
            <?php

         }

        ?>

       
    </table>
    
</body>
</html>
<?php
if(isset($_POST["submit"])){

    $connection=mysqli_connect("localhost","root","","mydb");
    // GET DATA FROM FORM
    $n=$_POST['name'];
    $a=$_POST['address'];
    $age=$_POST['age'];
    // insert data
    $result=mysqli_query($connection,"INSERT INTO
     `student`(`id`, `names`, `address`, `age`) 
    VALUES (null,'$n','$a','$age')");
    if($result){
        
        echo"<script>window.location.href='index.php'</script>";
    }

}

?>