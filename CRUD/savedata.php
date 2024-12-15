<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <br><br>  
<a href="form.php">Create</a>
 <br><br>
 <table border = '1' cellpadding = '8px'>

  <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
 </thead>

    <tbody>


 <?php
 $query = "SELECT * from myform";
 $res = mysqli_query($con, $query);
 $result = mysqli_num_rows($res);

 $num = 1;

 if ($result){
 while ($row = mysqli_fetch_assoc($res)) { ?>
<tr>
   <td><?php echo $num; ?></td>
   <td><?php echo $row['name']; ?></td>
   <td><?php echo $row['email']; ?></td>
   <td><?php echo $row['age']; ?></td>
</tr>
<?php
 $num ++;
 }
} ?>


</tbody>
</table>

</body>
</html>