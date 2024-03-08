<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <style>
        body{
            font-family: sans-serif;
        }
        h1,p{
            text-align: center;
        }
        table{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <div class="container-lg">
    <h1 style="text-align: center;" class="mt-3">Webboard KakKak</h1>
    <php include="nav.php" ?>
        <div class="row mt-4">
            <div class="col-lg-3 colmd-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card-header bg-success mt-3">
                    <div class="card-header bg-success text-whitte">
                        เเสดงความคิดเห็น </div>
                        <div class ="card-body">
                            <form accept="post_save.php" method="post">
                                <input type="hidden" name="post_id"
                                value="<?= $_GET['id'];?>">
                                <div class="row mb-3 justify-content-center">
                                    <div class="col-lg-10">
                                        <textarea name="comment" rows="8"
                                        class="form-control"required></textarea>
                                        <div class="row">
        <div class="col-lg d-flex justify-content-center">
            <button type="submit" class="btn btn-success btn-sm text-white">
                <i class="bi bi-box-arrow-up-right"></i>ส่งข้อความ
            </button>
            <button type="reset" class="btn btn-danger btn-sm ms-2">
                <i class="bi bi-x-square"></i>ยกเลิก </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-1"></div>
                </div>
            </div>
        </div>
    </php>
    <hr>
            </button>
        </div>
    </div>
</body>
</html>