<?php  
include('conn.php');
  
$id=2;  
$sql = "delete from emp5 where id=$id";  
if(mysqli_query($conn, $sql)){  
 echo "Record deleted successfully";  
}else{  
echo "Could not deleted record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  