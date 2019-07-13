<?php

function details($class,$roll){
include('dbconnect.php');
$query="SELECT * FROM `student` WHERE `rollno`='$roll' AND `class`='$class';";
$run=mysqli_query($con,$query);
if(mysqli_num_rows($run)>0){
$data=mysqli_fetch_assoc($run);
?>
<table align="center"  width="80%" border="1" style="margin-top: 40px;">
	<tr><th colspan="3" style="background-color: black;color:white;">Student Info</th></tr>
	<tr align="center"><td rowspan="6"><img src="dataimages/<?php  echo $data['image'];?>" style="max-width:220px;max-height:200px;" /></td>
<th style="background-color: brown;color:white;" width="35%">Name</th>
	<td width="50%"><?php echo $data['sname']; ?></td>
</tr>
<tr>
	<th style="background-color: blue;color:white;">CITY</th>
	<td align="center"><?php echo $data['city']; ?></td>
</tr>
<tr>
	<th style="background-color:brown;color:white;">Parents Contact</th>
	<td align="center"><?php echo $data['pcont']; ?></td>
</tr>
<tr>
	<th style="background-color: blue;color:white;">Roll No</th>
	<td align="center"><?php echo $data['rollno']; ?></td>
</tr>
<tr>
	<th style="background-color:brown;color:white;">Class</th>
	<td align="center"><?php echo $data['class']; ?></td>
</tr>
<tr>
	<th  style="background-color:black;color:white;">Attendance</th>
	<td align="center" style="background-color: black;color: red;"><?php echo $data['Attendance'].'%'; ?></td>
</tr>
</table>







<?php
}
else{
	?><script>alert('No Records Found ');</script><?php
}

}


?>