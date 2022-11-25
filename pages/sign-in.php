<?php
require_once '../bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ออกแบบระบบ</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>style.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>utility.css">
</head>

<body class="scroll">
    <div class="auth-container">
        <div class="auth-page-title">
            ออกแบบระบบ
        </div>
        <div class="card">
            <div class="card-body p-5">
                <h1 class="auth-header">ลงชื่อเข้าใช้บัญชีของคุณ</h1> 
                <label for="email">อีเมล</label>
                <input type="email" name="email" id="email" class="form-control mb-3" placeholder="อีเมล">
                <label for="password">รหัสผ่าน</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="รหัสผ่าน"> 

                <button type="submit" class="btn btn-blue mt-4 w-100">เข้าสู่ระบบ</button>

            </div>
        </div>
        <div class="text-grey pt-3 text-c">
            ยังไม่มีบัญชี? <a href="<?= BASE_URL ?>pages/sign-up.php">สร้างบัญชี</a>
        </div>
    </div>
</body>

</html>