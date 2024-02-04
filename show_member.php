<?php
include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member</title>
    <style>
        body{
            background-image: linear-gradient(0deg, rgba(74, 255, 61, 0.24) 0%, rgba(253, 247, 250, 0.27) 100%);
        }
    </style>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<body>
    <div class="container">
        <div class="h4 text-center alert alert-success  mt-4" role="alert">แสดงข้อมูลสมาชิก</div>
        
    <Table class="table table-striped">
        <tr>
            <th>รหัส</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เบอร์โทรศัพท์</th>
            <th>แก้ไขข้อมูล</th>
            <th>ลบข้อมูล</th>
        </tr>

<?php
$sql = "SELECT * FROM member";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){
?>
        <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["name"]?></td>
            <td><?=$row["surname"]?></td>
            <td><?=$row["telephone"]?></td>
            <td><a href="edit_member.php?id=<?=$row["id"]?>" class="btn btn-warning ">แก้ไขข้อมูล</a></td>
            <td><a href="delete_member.php?id=<?=$row["id"]?>" class="btn btn-danger" onclick="Del(this.href);return false;" >ลบข้อมูล</a></td>
        </tr>
   
<?php
}
mysqli_close($conn);
?>

</Table><a href="fr_members.php" class="btn btn-success mb-4" style="float:right;">เพิ่มข้อมูล</a>
</div>

</body>
</html>

<script language="javascript">
    function Del(mypage){
        var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
        if(agree){
            window.location=mypage;
        }
    }
</script>