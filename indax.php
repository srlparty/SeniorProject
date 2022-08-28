<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/indax.css">
    <title>Index</title>
    <?php include "./nav.php" ?>
</head>

<body>

    <img class="image-hotel" src="./img/banner1.png" class="d-block w-100" alt="...">

    <div class="container text-center">
        <div class="row">
            <div class="col-md-3 ">
                <p>วันที่เช็คอิน</p>
                <form method="POST" class="hstack gap-4 mt-4">
                    <label>เลือกวันที่เช็คอิน</label>
                    <input type="date" class="form-control" style="width: 50%;">
                </form>
            </div>
            <div class="col-md-3" style="border-left: 1px solid rgb(221, 221, 221) ;">
                <p> วันที่เช็คเอ้าท์</p>
                <form method="POST" class="hstack gap-4 mt-4">
                    <label>เลือกวันที่เช็คเอ้าท์</label>
                    <input type="date" class="form-control" style="width: 50%;">
                </form>
            </div>
            <div class="col-md-3" style="border-left: 1px solid rgb(221, 221, 221) ;  ">
                <p>ประเภทห้องพัก</p>
                <form method="POST" class="hstack gap-4 mt-4">
                    <select class="form-select" aria-label="Default select example">
                        <option value="">Standard</option>
                    </select>
                </form>
            </div>
            <button class="col-md-3 btnsearch" href="">
                ค้นหา
            </button>
        </div>
    </div>

    <p>party 555</p>
    <p>mink</p>

    
    


</body>

</html>