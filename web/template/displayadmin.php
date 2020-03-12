<!DOCTYPE html>
<html>
<head>
<title>Customer details</title>
<style>
table {
border-collapse:;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: center;
}
th {
background-color: violet;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
	<tr>
		<th colspan="10"> <center>Customer details</center></th>
	</tr>
<tr>
<th>Id</th>
<th> refid </th>
<th>edate</th>
<th>etime</th>
<th>name</th>
<th>email</th>
<th>mob</th>
<th>note</th>
<th>total</th>
<th>status</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "form");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM leads";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"] . "</td><td>" . $row["refid"] . "</td><td>"
. $row["edate"] . "</td><td>". $row["etime"] ."</td><td>". $row["name"]."</td><td>".$row["email"]. "</td><td>" . $row["mob"]. "</td><td>" . $row["note"]. "</td><td>" . $row["total"]. "</td><td>" . $row["status"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
//$conn->close();
?>
</table>
<?php
$sql1="SELECT * from leads where status='Pending'";
    $data1 = mysqli_query($conn, $sql1);
    if(!$data){
          echo "Can't retrieve data " . mysqli_error($conn);
          exit;
        }
        $_SESSION['status'] = $status = $data['status'];
        $child1 = "backgroundOverlay('".$_SESSION['status']." requests', 'are pending','users.jpg','#2CA8FF','white');";
        ?>
</body>
</html>

 
 

<script type="text/javascript">
      var child = 1;
        setInterval(function() {
          if(child == 1){
            <?php echo $child1; ?>
          }
        }, 7000);
 </script>
