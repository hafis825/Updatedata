<?php
include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show product</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="h4 text-center alert alert-primary  mt-4" role="alert">แสดงข้อมูลสินค้า</div>
    <table class="table table-bordered border-primary text-center">
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ประเภท</th>
            <th>ราคา</th>
            <th>จำนวน</th>
            <th>รูปสินค้า</th>
        </tr>
    <?php
     $sql="SELECT * FROM product, type WHERE product.type_id=type.type_id";
     $hand=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_array($hand)){
    ?>   
        <tr>
            <td><?=$row['pro_id']?></td>
            <td><?=$row['pro_name']?></td>
            <td><?=$row['type_name']?></td>
            <td><?=$row['price']?></td>
            <td><?=$row['amount']?></td>
            <td><img src="images/<?=$row['image']?>" width="100px" hieght="150px"></td>
        </tr>
    <?php
     }
     ?>
    </table>

    </div>
    
</body>
</html>