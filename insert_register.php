<?php
include 'condb.php';
//รับค่าตัวแปรมาจากไฟล์ register
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];

//คำสั่งเพิ่มข้อมูลลงตาราง login_member
$sql ="INSERT INTO register(name,lastname,telephone,username,password)
Values('$name','$lastname','$phone','$username','$password')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='register.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลไม่ได้');</script>";
}

mysqli_close($conn);

?>