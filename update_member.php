<?php

include 'condb.php';

$id=$_POST['idmem'];
$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$tel=$_POST['telephone'];

$sql = "UPDATE member set name='$f_name', surname='$l_name', telephone='$tel' WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แกไข้ข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_member.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลไม่ได้');</script>";
}

mysqli_close($conn);

?>