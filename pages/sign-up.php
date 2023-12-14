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

    <link rel="stylesheet" href="<?= SITE_URL ?>/style.css">
    <link rel="stylesheet" href="<?= SITE_URL ?>/utility.css">
    <link rel="stylesheet" href="<?= SITE_URL ?>/auth.css">
</head>

<body class="scroll">
    <div class="auth-container">
        <div class="auth-page-title">
            ออกแบบระบบ
        </div>
        <div class="card">
            <div class="card-body p-5">
                <h1 class="auth-header">สร้างบัญชีของคุณ</h1>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="firstname">ชื่อ</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="ชื่อ">
                    </div>
                    <div class="col-6">
                        <label for="lastname">นามสกุล</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="นามสกุล">
                    </div>
                </div>
                <label for="email">อีเมล</label>
                <input type="email" name="email" id="email" class="form-control mb-3" placeholder="อีเมล">
                <label for="password">รหัสผ่าน</label>
                <input type="password" name="password" id="password" class="form-control mb-3" placeholder="รหัสผ่าน">
                <label for="tel">หมายเลขโทรศัพท์</label>
                <input type="tel" name="tel" id="tel" class="form-control" placeholder="หมายเลขโทรศัพท์">

                <button type="submit" class="btn btn-blue mt-4 w-100">สร้างบัญชี</button>

            </div>
        </div>
        <div class="text-grey pt-3 text-c">
            มีบัญชีอยู่แล้ว? <a href="<?= SITE_URL ?>/pages/sign-in.php">เข้าสู่ระบบ</a>
        </div>
    </div>
</body>

</html>