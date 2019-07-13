<?php
include('../dbconnect.php');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$roll=$_POST['roll'];
$class=$_POST['class'];
$id=$_POST['sid'];
$image=$_FILES['simage']['name'];
$tempimage=$_FILES['simage']['tmp_name'];
move_uploaded_file($tempimage,"../dataimages/$image");
$query="UPDATE `student` SET `sname` = '$name', `city` = '$city', `pcont` = '$contact', `rollno` = '$roll',`image`='$image', `class` = '$class' WHERE `id` = '$id';";
$run=mysqli_query($con,$query);
if($run){
?><script >alert("DATA INSERTION SUCCESSFULL");
window.open('updateform.php?sid=<?php echo $id; ?>','_self');
</script>
<?php
}
else{
	echo "error";
}

}



?>

