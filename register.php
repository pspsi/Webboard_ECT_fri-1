<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body{
            font-family: sans-serif;
        }
        h1{
            text-align: center;
        }
        table{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <div class="container-lg">
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <?php
    if(isset($_SESSION['add_logn'])){
        if($_SESSION['add_login']=="error"){
            echo"<div class='alert alert-danger'>ชื่อบัญชีซ้ำหรือฐานข้อมูลมีปัญหา</div>";
        }else{
            echo "<div class='alert alert-success'>เพิมบัญชีเรียบร้อย</div>";
    }
    unset($_SESSION['add_login']);
}
    ?>
</div>
    <div class="d-flex justify-content-center">
        <form action="register_save.php" method="POST">
            <div class="card">
            <div class="card-header bg-primary  text-white">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <div class="row g-3 align-item-center">
                        <div class="col-2   ">
                            <label for="user" class="col-form-label">ชื่อบัญชี : </label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="user" name="user" class="form-control" require>
                        </div>
                        <div class="col-2   ">
                            <label for="pwd" class="col-form-label">รหัสผ่าน : </label>
                        </div>
                        <div class="col-9">
                            <input type="password" id="pwd" name="pwd" class="form-control" require>
                        </div>
                        <div class="col-2">
                            <label for="name" class="col-form-label">ชื่อ - นามสกุล : </label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="text"  name="name"  class="form-control" require>
                        </div>
                        </div>
                         <div class="row mt-3">
                            <label class="col-lg-2 form-label">เพศ:</label>
                            <div class="col-lg-9">
                                <div class="form-check">
                                <input type="radio" name="gender"  value="m" class="form-check-input" require>
                                <label>ชาย</label>
                                </div>
                                <div class="form-check">
                                <input type="radio" name="gender"  value="f" class="form-check-input" require>
                                <label>หญิง</label>
                                </div>
                                <div class="form-check">
                                <input type="radio" name="gender"  value="o" class="form-check-input" require>
                                <label>อื่นๆ</label>
                                </div>
                            </div>
                            <label class="col-lg-2 col-form-label">อีเมล:</label>
                            <div class="col-lg-9">
                                <input type="email" name="email"class="form-control" required>
                            </div>
                         </div>
                         <div class="row mt-3">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btn-sm me-2">
                                    <i class="bi bi-save"></i>สมัครสมาชิก
                                </button>

                            </div>
                         </div>
    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-1"></div>
    </div>
    <br>
</body>
</html>
