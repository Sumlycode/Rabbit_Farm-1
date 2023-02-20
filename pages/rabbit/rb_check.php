<h4 class="app-page-title">
    <span class="nav-icon">
        <span><i class="fa-solid fa-pen-to-square"></i>ตรวจสุขภาพกระต่าย</span>
    </span>  
</h4>
<hr class="mb-4">
<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <div class=".table-responsive">
                    <button data-bs-toggle="modal" data-bs-target="#addModalRabbitData" class="btn btn-success"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูล</button>
                    <hr class="mb-3">
                    <div class="table table-borderless mb-0">
                        <table id="myTable" class="table table-bordered" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>รหัสกรง</th>
                                    <th>รหัสกระต่าย</th>
                                    <th>ตรวจสุขภาพ</th>

                                    <th>รายละเอียด</th>
                                    <th>รักษา</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TR01</td>
                                    <td>RB01</td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#" class="btn btn-success"><i class="fa-solid fa-plus"></i></button></td>
                                    <td><span class="badge bg-danger">ป่วย</span></td>
                                </tr>
                                <tr>
                                    <td>BR02</td>
                                    <td>RB02</td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#" class="btn btn-success"><i class="fa-solid fa-plus"></i></button></td>
                                    <td><span class="badge bg-danger">ป่วย</span></td>
                                </tr>
                                <tr>
                                    <td>TB02</td>
                                    <td>RB03</td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#" class="btn btn-success"><i class="fa-solid fa-plus"></i></button></td>
                                    <td><span class="badge bg-danger">ป่วย</span></td>
                                </tr>                                
                            </tbody>
                        </table>   
                    </div>
                </div>
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div>
</div><!--//row-->

<?php include_once('modal_rb_data.php'); ?>
