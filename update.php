<?php
 $connection=mysqli_connect("localhost","root","","mydb");
$id=$_GET['id'];
$result=mysqli_query($connection,"select * from student where id=$id");
while($row=mysqli_fetch_array($result)){

  $id=$row["id"];
 $name=$row["names"];
 $address=$row["address"];
 $age=$row['age'];

}

?>
   <form action="finalupdate.php" method="post">
   <input type="text" name='id' placeholder="ENTER NAMES" value='<?php echo $id; ?>' hidden><br>
       <input type="text" name='name' placeholder="ENTER NAMES" value='<?php echo $name; ?>'><br>
       <input type="text" name='address' placeholder="ENTER ADDRESS" value='<?php echo $address ?>'><br>
       <input type="number" name='age' placeholder="ENTER AGE" value='<?php echo $age ?>'><br>
       <button type='submit' name='submit'>SAVE CHANGES</button>
    </form>


