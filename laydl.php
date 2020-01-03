
<style>
table {
	width: 700px;
	border-collapse: collapse;
}

table, td, th {
	border: 1px solid black;
	padding: 10px;
	margin-left: 100px;
	text-align: center;
}

th {text-align: center;}
</style>

<?php
if (isset($_GET['q'])){
	$q = $_GET['q'];
}
include("modules/connection.php");

echo 
"<table>
<tr>
<th>Mã sinh viên</th>
<th>Họ và tên</th>
<th>Ngày sinh</th>
<th>Giới tính</th>
<th>Quê quán</th>
<th>Lớp</th>

</tr>";

$sql = "SELECT * FROM sinhvien1 WHERE lop_mal = '$q'";

$result = $conn->query($sql);
if($result->num_rows> 0){
	while($row = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . $row['masv'] . "</td>";
		echo "<td>" . $row['hoten'] . "</td>";
		echo "<td>" . $row['ngaysinh'] . "</td>";
		echo "<td>" . $row['gioitinh'] . "</td>";
		echo "<td>" . $row['quequan'] . "</td>";
		echo "<td>" . $row['lop_mal'] . "</td>";
		echo "</tr>";
	}
}
mysqli_close($conn);
?>
