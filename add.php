<?php  
include('conn.php');
 
  
$sql = 'INSERT INTO emp5(name,emp_salary) VALUES ("nirali", 7000)';  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  
