<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>room</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/manage.css">
    <?php
    include "../admin/nav-admin.php";
    include "../fuction/importlink.php";
    include "../fuction/connectDB.php";

    ?>
</head>

<body>
    <h2><b>จัดการห้องพัก</b></h2>
    <div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
				<form action="" id="manage-room">
					<div class="card">
						<div class="card-header">
							เพิ่มห้องพัก
						</div>
						<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">เลขห้องพัก</label>
								<input type="text" class="form-control" name="room">
							</div>
							<div class="form-group">
								<label class="control-label">ประเภทห้องพัก</label>
								<select class="custom-select browser-default" name="category_id">
									<?php
									$cat = $conn->query("SELECT * FROM room_categories order by name asc ");
									while ($row = $cat->fetch_assoc()) {
										$cat_name[$row['id']] = $row['name'];
									?>
										<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="" class="control-label">สถานะห้องว่าง</label>
								<select class="custom-select browser-default" name="status">
									<option value="0">ว่าง</option>
									<option value="1">เต็ม</option>
									<option value="2">กำลังทำความสะอาด</option>
									<option value="3">อยู่ในระหว่างการซ่อมแซม</option>
								</select>
							</div>
						</div>

						<div class="card-footer">
							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-sm btn-success col-sm-3 offset-md-3">บันทึก</button>
									<button class="btn btn-sm btn-danger col-sm-3" type="button" onclick="$('#manage-room').get(0).reset()">ยกเลิก</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">ลำดับ</th>
									<th class="text-center">ประเภทห้องพัก</th>
									<th class="text-center">เลขห้องพัก</th>
									<th class="text-center">สถาะห้อง</th>
									<th class="text-center">จัดการ</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								$rooms = $conn->query("SELECT * FROM rooms order by id asc");
								while ($row = $rooms->fetch_assoc()) :
								?>
									<tr>
										<td class="text-center"><?php echo $i++ ?></td>


										<td class="text-center"><?php echo $cat_name[$row['category_id']] ?></td>
										<td class=""><?php echo $row['room'] ?></td>
										<?php
										if ($row['status'] == 0) {
											echo '<td class="text-center"><span class="badge badge-success">ว่าง</span></td>';
										} else {
											if ($row['status'] == 1) {
												echo '<td class="text-center"><span class="badge badge-danger">เต็ม</span></td>';
											} else {
												if ($row['status'] == 2) {
													echo '<td class="text-center"><span class="badge badge-info">กำลังทำความสะอาด</span></td>';
												} else {
													echo '<td class="text-center"><span class="badge badge-warning">อยู่ในระหว่างการซ่อมแซม</span></td>';
												}
											}
										}
										?>
										<td class="text-center">
											<button class="btn btn-sm btn-primary edit_cat" type="button" data-id="<?php echo $row['id'] ?>" data-room="<?php echo $row['room'] ?>" data-category_id="<?php echo $row['category_id'] ?>" data-status="<?php echo $row['status'] ?>">แก้ไข</button>
											<button class="btn btn-sm btn-danger delete_cat" type="button" data-id="<?php echo $row['id'] ?>">ลบ</button>
										</td>
									</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>

</div>

<script>
	$('#manage-room').submit(function(e) {
		e.preventDefault()
		start_load()
		$.ajax({
			url: 'ajax.php?action=save_room',
			method: "POST",
			data: $(this).serialize(),
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Data successfully added", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				} else if (resp == 2) {
					alert_toast("Data successfully updated", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				}
			}
		})
	})
	$('.edit_cat').click(function() {
		start_load()
		var cat = $('#manage-room')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='room']").val($(this).attr('data-room'))
		cat.find("[name='category_id']").val($(this).attr('data-category_id'))
		cat.find("[name='status']").val($(this).attr('data-status'))
		end_load()
	})
	$('.delete_cat').click(function() {
		_conf("Are you sure to delete this room?", "delete_cat", [$(this).attr('data-id')])
	})

	function delete_cat($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_room',
			method: 'POST',
			data: {
				id: $id
			},
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Data successfully deleted", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				}
			}
		})
	}
</script>
    <!-- Button trigger modal -->
    <!-- <a href="./manage-add.php"><button type="button" class="btn btn-primary addroom" style="background-color: #EF774B; border:#EF774B;">
        เพิ่มห้องพัก
    </button></a>


    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ประเภทห้อง</th>
                <th>เลขห้อง</th>
                <th>สถานะห้อง</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
        <?Php
            require_once('../fuction/connectDB.php');
            $result = $conn->prepare("SELECT * FROM room ");
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){
        ?>

            <tr>
                <td><?php echo $row['R_ID']; ?></td>
                <td><?php echo $row['R_Type']; ?></td>
                <td><?php echo $row['R_Bed']; ?></td>
                <td><?php echo $row['R_Detail']; ?></td>
                <td>
                    <div class="edit-delete">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editroom"><i class='bx bx-edit-alt'></i>แก้ไข</button>
                        <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i>ลบ</button>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php require '../fuction/modal-addroom.php';
            require '../fuction/modal-editroom-1.php' ?>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script> -->
</body>

</html>