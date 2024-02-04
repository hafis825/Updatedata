<?php
include 'condb.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="h4 text-center alert alert-primary  mt-4" role="alert">เพิ่มข้อมูลสินค้า</div>
    <form name="form1" method="post" action="insert_product.php" enctype="multipart/form-data">
        <label>ชื่อสินค้า:</label>
        <input type="text" name="pname" class="form-control" placeholder="ชื่อสินค้า" required><br>
        <label>ประเภทสินค้า:</label>
        <select class="form-select" name="typeID" >
    <?php 
    $sql="SELECT * FROM type ORDER BY type_name";
    $hand=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($hand)){
    ?>

    <option value="<?=$row['type_id']?>"><?=$row['type_name']?></option>
    <?php
    }
    mysqli_close($conn);
    ?>
   
        </select><br>
    
        <label>ราคา:</label>
        <input type="text" name="price" class="form-control" placeholder="ราคา" required><br>
        <label>จำนวน:</label>
        <input type="text" name="num" class="form-control" placeholder="จำนวน" required><br>
        <label>รูปภาพ:</label>
        <input type="file" name="file1" required><br><br>
        <button type="submit" class="btn btn-outline-primary">เพิ่มสินค้า</button>
        <input class="btn btn-outline-danger" type="reset" value="ยกเลิก">

    </form>

    </div>
    
</body>
</html>