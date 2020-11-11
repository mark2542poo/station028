<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron">
  <h1>ตารางสถานีรถไฟ</h1>      
  <p></p>
</div>

<div class="container">
  <p></p>      
  <p></p>      


 



<form action="<?php echo base_url('./station/inser');?>"  method="post" id="form1">
ขบวน
<input type="text" class="form-control" id="validationCustom02" name="procession" placeholder="" value="" >
ต้นทาง
<input type="text" class="form-control" id="validationCustom02" name="station1" placeholder="" value="" >
เวลาออก
<input type="time" class="form-control" id="validationCustom02" name="timeout" placeholder="" value="" >
ถึง
<input type="time" class="form-control" id="validationCustom02" name="to" placeholder="" value="" >
ออก
<input type="time" class="form-control" id="validationCustom02" name="out" placeholder="" value="" >
สถานี2
<input type="text" class="form-control" id="validationCustom02" name="station2" placeholder="" value="" >
ถึงเวลา
<input type="time" class="form-control" id="validationCustom02" name="timein" placeholder="" value="" >
หมายเหตุ
<input type="text" class="form-control" id="validationCustom02" name="note" placeholder="" value="" >
  <div class="form-row">
  <button class="btn btn-primary" type="submit">ตกลง</button> 
    <button class="btn btn-secondary" type="submit">ยกเลิก</button>
</form>
  

</div>

</div>
</body>
</html>


