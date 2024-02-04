<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-12 bg-light text-dark">
    <div class="alert alert-success mt-4 h3" role="alert">
        สมัครสมาชิก
</div>
<form metohd="POST" action="insert_register.php">
ชื่อ<input type="text" name="firstname" class="form-control" required>
นามสกุล<input type="text" name="lastname" class="form-control" required>
เบอร์โทรศัพท์<input type="number" name="phone" class="form-control" required>
Username<input type="text" name="username" class="form-control" required>
Password<input type="password" name="passwoed" class="form-control" required><br>
<input type="submit" name="submit" class="btn btn-primary" value="บันทึก">
<input type="reset" name="cancel" class="btn btn-primary" value="ยกเลิก">
<br><br>
<a href="login.php">login</a>
</form>
    </div>
    </div>
    </div>
    
</body>
</html>