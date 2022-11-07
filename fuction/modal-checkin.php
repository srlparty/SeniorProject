<div class="modal fade" id="checkin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Check In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">ชื่อ-นามสกุล</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact">เบอร์โทรศัพท์</label>
                        <input type="text" name="contact" id="contact" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="date_in">วันที่เช็คอิน</label>
                        <input type="date" name="date_in" id="date_in" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="date_in_time">เวลาที่เช็คอิน</label></label>
                        <input type="time" name="date_in_time" id="date_in_time" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="days">จำนวนวันที่อยู่</label>
                        <input type="number" min="1" name="days" id="days" class="form-control" >
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#cal">บันทึก</button>
                    <button type="button" class="btn btn-danger" name="save-btn">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require '../fuction/modal-checkin-cal.php';?>