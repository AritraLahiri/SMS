<?php
include('../dbconnect.php');
$id=$_REQUEST['sid'];
$query="DELETE FROM `student` WHERE `id`= '$id';";
$run=mysqli_query($con,$query);
if($run){
?><script >alert("DATA DELETION SUCCESSFULL");
window.open('delete.php?sid=<?php echo $id; ?>','_self');
</script>
<?php
}
else{
	echo "error";
}





?>

