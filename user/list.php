
<?php
include '../fuction/connectDB.php';
include './nav.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>
<style>
	.countbutton .btn-outline-primary:hover {
		color: #fff;
		background-color: #0d6efd;
		border-color: #0d6efd;
	}

	.countbutton .btn-outline-primary {
		font-size: 25px;
		color: #0d6efd;
		border-color: #0d6efd;
	}
</style>

<body>
	<section class="page-section bg-dark"><br>

		<div class="container">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<form action="index.php?page=list" id="filter" method="POST">
							<div class="row">
								<div class="col-md-2">
									<label for="">วันที่เช็คอิน</label>
									<input type="date" class="form-control datepicker" name="date_in" autocomplete="off" value="<?php echo isset($date_in) ? date("Y-m-d", strtotime($date_in)) : "" ?>">
								</div>
								<div class="col-md-2">
									<label for="">วันที่เช็คเอ้าท์</label>
									<input type="date" class="form-control datepicker" name="date_out" autocomplete="off" value="<?php echo isset($date_out) ? date("Y-m-d", strtotime($date_out)) : "" ?>">
								</div>
								<div class="col-md-3">
									<label for="">ผู้ใหญ่</label>
									<!-- <input type="number" class="form-control"> -->
									<div class="row countbutton">
										<div class="col-4">
											<button type="button" class="btn btn-outline-primary w-100 p-0" onclick="adult_minus()">-</button>
										</div>
										<div class="col-4">
											<input type="text" id="adults" name="adults" value="0" class="border-0 w-100 form-control text-center">
										</div>
										<div class="col-4">
											<button type="button" class="btn btn-outline-primary w-100 p-0" onclick="adult_plus()">+</button>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<label for="">เด็ก</label>
									<!-- <input type="number" class="form-control"> -->
									<div class=" row countbutton">
										<div class="col-4">
											<button type="button" class="btn btn-outline-primary w-100 p-0" onclick="kid_minus()">-</button>
										</div>
										<div class="col-4">
											<input type="text" id="kids" name="kids" value="0" class="border-0 w-100 form-control text-center">
										</div>
										<div class="col-4">
											<button type="button" class="btn btn-outline-primary w-100 p-0" onclick="kid_plus()">+</button>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<br>
									<button class="btn-btn-block btn-primary mt-3 ">ค้นหา</button>
								</div>

							</div>
						</form>
					</div>
				</div>

				<hr>

				<?php

				$cat = $conn->query("SELECT * FROM room_categories");
				$cat_arr = array();
				while ($row = $cat->fetch_assoc()) {
					$cat_arr[$row['id']] = $row;
				}
				$qry = $conn->query("SELECT distinct(category_id),category_id from rooms where id not in (SELECT room_id from checked where '$date_in' BETWEEN date(date_in) and date(date_out) and '$date_out' BETWEEN date(date_in) and date(date_out)  )");
				while ($row = $qry->fetch_assoc()) :

				?>
					<div class="card item-rooms mb-3">
						<div class="card-body">
							<div class="row">
								<div class="col-md-5">
									<img src="assets/img/<?php echo $cat_arr[$row['category_id']]['cover_img'] ?>" alt="">
								</div>
								<div class="col-md-5" height="100%">
									<h3><b><?php echo '$ ' . number_format($cat_arr[$row['category_id']]['price'], 2) ?></b><span> / ต่อวัน</span></h3>
									<h4><b>
											<?php echo $cat_arr[$row['category_id']]['name'] ?>
											<b><button type="button" class="btn btn-link" style="color: #EF774B;" data-bs-toggle="modal" data-bs-target="#roomdetail">รายละเอียดเพิ่มเติม</button></b>
										</b></h4>
									<div class="col-md-8">
										<p class="card-t"><i class='bx bx-wifi'></i>ฟรี Wi-Fi</p>
										<p class="card-t"></i><i class='bx bx-x'></i>ห้องปลอดบุหรี่</p>
										<p class="card-t"><i class='bx bxs-bowl-rice'></i>ไม่รวมอาหารเช้า</p>
										<p class="card-t"><i class='bx bxs-dog'></i>ไม่อนุญาตให้นำสัตว์เลี้ยงเข้าห้องพัก</p>
									</div>
									<div class="align-self-end mt-2">
										<a class="btn btn-primary  float-right book_now" type="button" href="./index.php?page=payment&id=<?php echo $row['category_id'] ?>" data-id="<?php echo $row['category_id'] ?>">จองห้องนี้</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>




	</section>
	<style type="text/css">
		.item-rooms img {
			width: 23vw;
		}
	</style>
	<!-- <script>
		$('.book_now').click(function() {
			uni_modal('Book', 'admin/book.php?in=<?php echo $date_in ?>&out=<?php echo $date_out ?>&cid=' + $(this).attr('data-id'))
		})
	</script> -->
	<!-- <?php require './modal/modal-roomdetal.php' ?> -->
	<script>
		function adult_plus() {
			var a = document.getElementById("adults").value;
			document.getElementById("adults").value = +a + +1;
		}

		function adult_minus() {
			var a = document.getElementById("adults").value;
			if (+a - +1 < 0) {
				document.getElementById("adults").value = 0;
			} else {
				document.getElementById("adults").value = +a - +1;
			}

		}

		function kid_plus() {
			var a = document.getElementById("kids").value;
			document.getElementById("kids").value = +a + +1;
		}

		function kid_minus() {
			var a = document.getElementById("kids").value;
			if (+a - +1 < 0) {
				document.getElementById("kids").value = 0;
			} else {
				document.getElementById("kids").value = +a - +1;
			}

		}
	</script>
</body>

</html>