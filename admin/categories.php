<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/manage.css">
    <?php
    include "../admin/nav-admin.php";
    include "../fuction/importlink.php";
    include "../fuction/connectDB.php";

    ?>
</head>

<body>
    <h2><b>จัดการประเภทห้อง</b></h2>
    <!-- Button trigger modal -->
    <a href="./categories-add.php"><button type="button" class="btn btn-primary addroom" style="background-color: #EF774B; border:#EF774B;">
        เพิ่มประเภทห้องพัก
    </button></a>

<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">ลำดับ</th>
									<th class="text-center">รูปภาพ</th>
									<th class="text-center">รายละเอียด</th>
									<th class="text-center">จัดการ</th>
								</tr>
							</thead>
        <?php
			$i = 1;
			$cats = $conn->query("SELECT * FROM room_categories order by id asc");
			while ($row = $cats->fetch_assoc()) :
			?>

<?php
									if ($row['airconditioner'] != '0') {
										$airconditioner = "แอร์";
										$airconditioner_checked = "true";
									} else {
										$airconditioner = "";
										$airconditioner_checked = "";
									}
									if ($row['tv'] != '0') {
										$tv = ",โทรทัศน์";
										$tv_checked = "true";
									} else {
										$tv = "";
										$tv_checked = "";
									}
									if ($row['waterheater'] != '0') {
										$waterheater = ",เครื่องทำน้ำอุ่น";
										$waterheater_checked = "true";
									} else {
										$waterheater = "";
										$waterheater_checked = "";
									}
									if ($row['towel_forhair'] != '0') {
										$towel_forhair = ",ผ้าเช็ดผม";
										$towel_forhair_checked = "true";
									} else {
										$towel_forhair = "";
										$towel_forhair_checked = "";
									}
									if ($row['towel'] != '0') {
										$towel = ",ผ้าเช็ดตัว";
										$towel_checked = "true";
									} else {
										$towel = "";
										$towel_checked = "";
									}
									if ($row['fridge'] != '0') {
										$fridge = ",ตู้เย็น";
										$fridge_checked = "true";
									} else {
										$fridge = "";
										$fridge_checked = "";
									}
									if ($row['pot'] != '0') {
										$pot = ",กาน้ำร้อน";
										$pot_checked = "true";
									} else {
										$pot = "";
										$pot_checked = "";
									}
									if ($row['water'] != '0') {
										$water = ",น้ำดื่ม";
										$water_checked = "true";
									} else {
										$water = "";
										$water_checked = "";
									}
									if ($row['pillow'] != '0') {
										$pillow = ",หมอน";
										$pillow_checked = "true";
									} else {
										$pillow = "";
										$pillow_checked = "";
									}
									if ($row['blanket'] != '0') {
										$blanket = ",ผ้าห่ม";
										$blanket_checked = "true";
									} else {
										$blanket = "";
										$blanket_checked = "";
									}
									$service = $airconditioner . $tv . $waterheater . $towel_forhair . $towel . $fridge . $pot . $water . $pillow . $blanket;
									?>
									<tr>
										<td class="text-center"><?php echo $i++ ?></td>


										<td class="text-center">
											<img src="<?php echo isset($row['cover_img']) ? '../assets/img/' . $row['cover_img'] : '' ?>" alt="" id="cimg">
										</td>
										<td class="">
											<p>ประเภท: <b><?php echo $row['name'] ?></b></p>
											<p>ประเภทเตียง:</p>
											<p>&nbsp;&nbsp;&nbsp; - เตียงเดี่ยว <b> <?php echo $row['sing_bed'] ?></b> เตียง</p>
											<p>&nbsp;&nbsp;&nbsp; - เตียงคู่ <b><?php echo $row['doub_bed'] ?></b> เตียง</p>
											</p>
											<p>สิ่งอำนวยความสะดวก: <b><?php echo $service ?></b></p>
											<p>จำกัดจำนวนผู้เข้าพัก: </p>
											<p>&nbsp;&nbsp;&nbsp; - ผู้ใหญ่ <b> <?php echo $row['adults'] ?></b> คน</p>
											<p>&nbsp;&nbsp;&nbsp; - เด็ก <b><?php echo $row['kids'] ?></b> คน</p>
											<p>ราคา: <b><?php echo "฿" . number_format($row['price'], 2) ?></b></p>
										</td>
										<td class="text-center">
											<button class="btn btn-sm btn-primary edit_cat" type="button" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-doub-bed="<?php echo $row['doub_bed'] ?>" data-sing-bed="<?php echo $row['sing_bed'] ?>" data-adults="<?php echo $row['adults'] ?>" data-kids="<?php echo $row['kids'] ?>" data-price="<?php echo $row['price'] ?>" data-cover_img="<?php echo $row['cover_img'] ?>" data-airconditioner_checked="<?php echo $airconditioner_checked ?>" data-tv_checked="<?php echo $tv_checked ?>" data-waterheater_checked="<?php echo $waterheater_checked ?>" data-towel_forhair_checked="<?php echo $towel_forhair_checked ?>" data-towel_checked="<?php echo $towel_checked ?>" data-fridge_checked="<?php echo $fridge_checked ?>" data-pot_checked="<?php echo $pot_checked ?>" data-water_checked="<?php echo $water_checked ?>" data-pillow_checked="<?php echo $pillow_checked ?>" data-blanket_checked="<?php echo $blanket_checked ?>">แก้ไข</button>
											<button class="btn btn-sm btn-danger delete_cat" type="button" data-id="<?php echo $row['id'] ?>">ลบ</button>
										</td>
									</tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php require '../fuction/modal-addroom.php';
            require '../fuction/modal-editroom-1.php' ?>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>