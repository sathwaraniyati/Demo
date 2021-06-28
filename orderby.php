<?php  
include('conn.php');
  
$sql = 'SELECT * FROM emp5 order by name';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo "EMP ID :{$row['id']}  <br> ".  
         "EMP NAME : {$row['name']} <br> ".  
         "EMP SALARY : {$row['emp_salary']} <br> ".  
         "--------------------------------<br>";  
 } 
}else{  
echo "0 results";  
}  
mysqli_close($conn);  
?>  