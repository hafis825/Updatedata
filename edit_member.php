<?php

include 'condb.php';
$id=$_GET['id'];
$sql = "SELECT * FROM member WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
    <style>
        body{
            background-image: linear-gradient(0deg, rgba(74, 255, 61, 0.24) 0%, rgba(253, 247, 250, 0.27) 100%);
        }
    </style>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="h4 text-center alert alert-success  mt-4" role="alert">แก้ไขข้อมูล</div>
    <form method = "post" action="update_member.php">
        <label>รหัสสมาชิก:</label>
        <input type="text" name="idmem" class="form-control" readonly value=<?=$row['id']?>><br>
        <label>ชื่อ:</label>
        <input type="text" name="fname" class="form-control" value=<?=$row['name']?>><br>
        <label>นามสกุล:</label>
        <input type="text" name="lname" class="form-control" value=<?=$row['surname']?>><br>
        <label>เบอร์โทรศัพท์:</label>
        <input type="number" name="telephone" class="form-control" value=<?=$row['telephone']?>>
        <input type="submit" value="อัปเดตข้อมูล" class="btn btn-success mt-4">
        <a href="show_member.php" class="btn btn-danger mt-4">ยกเลิก</a>
    </form><br>
    </div>
</body>
</html>