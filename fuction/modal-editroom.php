<!-- Modal -->
<div class="modal fade" id="editroom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มห้องพัก</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- form -->
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="text" class="form-label">เลขห้อง</label>
                        <input type="text" class="form-control" id="room-number" aria-describedby="emailHelp" placeholder="กรุณาระบุจำนวนเลขห้อง">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">ประเภทห้อง</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>เลือกประเภทห้อง</option>
                            <option value="#">#</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">ประเภทเตียง</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                เตียงคู่
                            </label>
                            <input id="number" type="number" value="" class="form-control" id="bed1" aria-describedby="emailHelp" placeholder="กรุณาระบุจำนวนเตียง">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                เตียงเดี่ยว
                            </label>
                            <input id="number" type="number" value="" class="form-control" id="bed2" aria-describedby="emailHelp" placeholder="กรุณาระบุจำนวนเตียง">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">สิ่งอำนวยความสะดวก</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="facilities-air" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">แอร์</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="facilities-tv" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">โทรทัศน์</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="facilities-water-heater" value="option3">
                            <label class="form-check-label" for="inlineCheckbox2">เครื่องทำน้ำอุ่น</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="facilities-towel" value="option4">
                            <label class="form-check-label" for="inlineCheckbox2">ผ้าเช็ดตัว</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="facilities-towel-hair" value="option5">
                            <label class="form-check-label" for="inlineCheckbox2">ผ้าเช็ดผม</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="facilities-fridge" value="option6">
                            <label class="form-check-label" for="inlineCheckbox2">ตู้เย็น</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="facilities-kettle" value="option7">
                            <label class="form-check-label" for="inlineCheckbox2">กาน้ำร้อน</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="facilities-water" value="option8">
                            <label class="form-check-label" for="inlineCheckbox2">น้ำดื่ม</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="facilities-pillow" value="option9">
                            <label class="form-check-label" for="inlineCheckbox2">หมอน</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="facilities-blanket" value="option10">
                            <label class="form-check-label" for="inlineCheckbox2">ผ้าห่ม</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">จำนวนผู้เข้าพัก</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                ผู้ใหญ่
                            </label>
                            <input id="number" type="number" value="" class="form-control" id="bed1" aria-describedby="emailHelp" placeholder="กรุณากำหนดจำนวนผู้เข้าพัก">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                เด็ก
                            </label>
                            <input id="number" type="number" value="" class="form-control" id="bed2" aria-describedby="emailHelp" placeholder="กรุณากำหนดจำนวนผู้เข้าพัก">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">ราคา</label>
                        <input type="text" class="form-control" id="price-room" aria-describedby="emailHelp" placeholder="กรุณากำหนดราคาห้องพัก">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">รูปภาพ</label><br>

                        <!-- โค้ดอัพรูปได้หลายๆรูป -->
                        <!-- <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name="file[]" accept="image/png, image/gif, image/jpeg" multiple>
                            <input type="submit" value="อัปโหลด">
                        </form> -->
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">บันทึก</button>
                <button type="button" class="btn btn-danger">ยกเลิก</button>
            </div>
        </div>
    </div>
</div>


<!-- โค้ดอัพรูปได้หลายๆรูป -->
<!-- <?php
    isset( $_FILES['file'] ) ? $file = $_FILES['file'] : $file = "";

    if( !empty( $file ) ) {
        for( $i=0; $i<count( $file['name'] ); $i++ ) {
            $file_name = $file['name'][$i];
            $file_tmp_name = $file['tmp_name'][$i];
            if( move_uploaded_file( $file_tmp_name, $file_name )) {
                echo "<img src='{$file_name}' /><br/>";
            }
        }
    }
?> -->