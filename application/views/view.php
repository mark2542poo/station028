<div class="container">

  <table class="table">
  <thead class="thead-dark">
	 <center><h2>ตารางขบวนรถ</h2></center>
		<tr>
		
			<th >
			<div class="event_location" align="center">ขบวน</div>
			</th>

			<th >
			<div class="event_location" align="center">สถานี</div>
			</th>

			<th >
			<div class="event_location"  align="center">เวลาออก</div>
			</th>
      
	  <th >
			<div class="event_location"  align="center">ถึง</div>
			</th>
			
			<th >
			<div class="event_location"  align="center">ออก</div>
			</th>
			
			<th >
			<div class="event_location"  align="center">สถานี</div>
			</th>
		
		<th >
			<div class="event_location"  align="center">ถึงเวลา</div>
			</th>

				<th >
			<div class="event_location"  align="center">หมายเหตุ</div>
			</th>
		</tr>
		        <a class="btn btn-primary" href="../ manage/view" role="button">เพิ่ม</a>

       
     <?php
     
     foreach ($query->result_array() as $r) { ?>

	
    <tr>
				<td><div class="event_location"  align="center"><?php echo $r["procession"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["station1"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["timeout"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["to"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["out"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["station2"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["timein"]; ?></td>
				<td><div class="event_location"  align="center"><?php echo $r["note"]; ?></td>




           </tr>

    <?php
    }
    ?>
</table>