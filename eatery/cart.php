<?php
include "cafe_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border ="1">
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>COMPANY NAME</th>
        <th>COUNTRY NAME</th>
        <th>ADDRESS</th>
        <th>POSTCARD</th>
        <th>CITY</th>
        <th>STATE</th>
        <th>EMAIL</th>
        <th>PHONE NO</th>
        

        <?php
        @$sql = "select * from orders";
        @$result = mysqli_query($conn, $sql);
        while($rows = mysqli_fetch_array($result)){
        
     
            ?>
            <tr>
                <td><?php echo $rows['first']; ?></td>
                <td><?php echo $rows['last']; ?></td>
                <td><?php echo $rows['company']; ?></td>
                <td><?php echo $rows['country']; ?></td>
                <td><?php echo $rows['add_res']; ?></td>
                <td><?php echo $rows['post_cd']; ?></td>
                <td><?php echo $rows['city']; ?></td>
                <td><?php echo $rows['state']; ?></td>
                <td><?php echo $rows['Email']; ?></td>
                <td><?php echo $rows['ph_num']; ?></td>
                <td>
                  <a href="order.php?id=<?php echo $rows['id']; ?>"><button class="btn btn_primary">ORDER</button></a>  
                <a href="delete.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-primary">DELETE</button></a>
                </td>
        </tr>
        <?php 
        }
        ?>

    </table>
</body>
</html>