<?php  
include('conn.php');
  
  
$id=1;  
$name="Rahul";  
$emp_salary=800;  
$sql = "update emp5 set name=\"$name\",emp_salary=$emp_salary where id=$id";  
if(mysqli_query($conn, $sql)){  
 echo "Record updated successfully";  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  