<div class="modal fade" id="addpro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">เพิ่มโปรโมชั่น</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="R_ID" class="form-label">ลำดับ</label>
                        <input type="text" class="form-control" id="R_ID" name="R_ID" aria-describedby="emailHelp" placeholder="กรุณาระบุลำดับ">
                    </div>
                    <div class="mb-3">
                        <label for="R_ID" class="form-label">ชื่อโปรโมชั่น</label>
                        <input type="text" class="form-control" id="R_ID" name="R_ID" aria-describedby="emailHelp" placeholder="กรุณาระบุชื่อโปรโมชั่น">
                    </div>
                    <div class="row">
                        <label for="R_ID" class="form-label">ตั้งค่าโปรโมชั่น</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="R_ID" name="R_ID" aria-describedby="emailHelp" placeholder="กรุณาระบุเปอร์เซนส่วนลด">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="R_ID" name="R_ID" aria-describedby="emailHelp" placeholder="กรุณาระบุส่วนลดเป็นจำนวนบาท">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="R_Type" class="form-label">ประเภทห้อง</label>
                        <select id="R_Type" class="form-control" name="R_Type" placeholder="ประเภทห้อง">
                            <option selected>เลือกประเภทโปรโมชั่น</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="R_ID" class="form-label">ช่วงเวลาโปรโมชั่น</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="R_ID" name="R_ID" aria-describedby="emailHelp">
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="R_ID" name="R_ID" aria-describedby="emailHelp">
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">บันทึก</button>
                    <button type="button" class="btn btn-danger" name="save-btn">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</div>