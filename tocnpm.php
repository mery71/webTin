<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Công nghệ phần mềm</title>
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<!-- <link rel="stylesheet" href="js\bootstrap.js"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
	html, body {margin: 0; height: 100%;  overflow-x:hidden;}
	#bang{
			/* margin-left: 20em;
			margin-top: 1em; */
			margin:  0 auto;
		}
		#bang td{
			padding: 0.5em;
		}
		#bang th{
			padding: 0.5em;
			text-align: center;
		}
	</style>
</head>

<body>

	<?php include "modules/header.php"; ?>
	<?php include "modules/menu.php"; ?>
	<?php include "modules/main left.php"; ?>
	<div id="main">
		<div id="right" >
			<div id="tt">
				<h1>TỔ CÔNG NGHỆ PHẦN MỀM</h1>
			</div>
			<div id="content">
				<form action="">
					<?php 
					
					require('modules/connection.php');
					
					echo '<table border="1" cellspacing="0" cellpadding="5" id="bang"><thead><tr><th>STT</th><th>Họ và tên</th><th>Trình độ bằng cấp</th><th>Số điện thoại</th><th>Quê quán</th></tr></thead><tbody>';
					$sql = "SELECT * FROM cnpm";
					$result = $conn->query($sql);
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
							echo "<tr>";
							echo "<td>" . $row['idcnpm'] . "</td>";
							echo "<td>" . $row['ten'] . "</td>";
							echo '<td style="text-align: center;">' . $row['bangcap'] . "</td>";
							echo "<td>" . $row['sdt'] . "</td>";
							echo "<td>" . $row['quequan'] . "</td>";
							echo "</tr>";
							?>
							<?php 
						}
					}
					mysqli_close($conn);
					?>
				</tbody>
			</table>
		</form>
	</div>
	<div id="hienthi" >
	</div>
</div>
</div>
<?php include "modules/footer.php" ?>
<script src="js/javascript.js"></script>
<script>

</script>
</body>
</html>