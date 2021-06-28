
<?php
include('conn.php');
  

$sql = "SELECT emp.name, message.messages FROM  emp LEFT JOIN message ON emp.emp_id = message.emp_id";
 echo "<table border='1'>
  <tr>
  <th>Name</th>
  <th>Message</th>
  </tr>";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
         echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['messages'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";
  
    }
 else {
    echo "0 results";
} 

$conn->close();
?>



