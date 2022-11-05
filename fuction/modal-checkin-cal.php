<div class="modal fade" id="cal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Check In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="container-fluid">
                        <p><b>เลขห้อง: </b></p>
                        <p><b>ประเภทห้อง : </b></p>
                        <p><b>ราคา : </b></p>
                        <p><b>เลขที่อ้างอิง : </b></p>
                        <p><b>ชื่อผู้จอง : </b></p>
                        <p><b>เบอร์โทรศัพท์ : </b></p>
                        <p><b>วัน-เวลาที่เช็คอิน: </b></p>
                        <p><b>วัน-เวลาที่เช็คเอาท์ : </b></p>
                        <p><b>จำนวนวัน : </b></p>
                        <p><b>ราคาทั้งหมด: </b></p>

                        <div class="row">
                            <?php if (isset($_GET['checkout']) && $status != 2) : ?>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary" id="checkout">Checkout</button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary" id="edit_checkin">แก้ไข</button>
                                </div>
                            <?php endif; ?>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                            </div>

                        </div>
                    </div>
                </form>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-success">บันทึก</button>
                    <button type="button" class="btn btn-danger" name="save-btn">ยกเลิก</button>
                </div> -->
            </div>
        </div>
    </div>
</div>