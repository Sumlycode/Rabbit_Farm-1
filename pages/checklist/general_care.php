<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>ระบบจัดการฟาร์มกระต่าย - มั่งมีฟาร์ม</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <!-- Google font -->
    <style>

      @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');

      body{
        font-family: 'Kanit', sans-serif;
      }

    </style>

</head> 

<body class="app">   	
<div class="list-group">
    <h4>การดูแลทั่วไป <?php $date = date("d/m/y"); echo $date; ?></h4>
  <label class="list-group-item">
    <input class="form-check-input me-1"  type="checkbox" value="">
    ตรวจเช็ตอุจาระของกระต่ายทุกตัว
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    ตรวจเช็คอาการกระต่ายว่ามีอาการผิดปกติไหม  
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    ให้หญ้ากับกระต่าย
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    ให้อาหารเม็ดกับกระต่าย
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    เก็บข้อมูล ฉี่กระต่าย
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    บันทึกข้อมูล สำหรับกระต่ายที่ผิดปกติ
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    แยกกระต่ายทีครบ30วันออกจากแม่กระต่าย
  </label>
</div>
   
    </div><!--//app-wrapper-->    					

    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>

      $(function () {
        $('#myTable').dataTable();
      });
      
    </script>

</body>
</html> 