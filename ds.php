<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sinh viên</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
	
	<?php include "modules/header.php"; ?>
	<?php include "modules/menu.php"; ?>
	<?php include "modules/main left.php"; ?>
	<div id="main">
		<div id="right" >
			<div id="content">
				
				<h1 style="text-align: center; color: red; margin-top: 30px;">DANH SÁCH SINH VIÊN CÁC LỚP</h1>
				
				<form action="">
					<label> Chọn sản phẩm</label>
					<select name="tenlop" onchange='loaddulieu(this.value);'>
						<option value="0" selected="" >Chọn</option>
						<?php 
						include("modules/connection.php");
						$sql = "SELECT * FROM lop";
						$result = $conn->query($sql);
						if($result->num_rows > 0){
							while($row = $result->fetch_assoc()){
								?>
								<option value=<?php echo $row['mal'];?>> <?php echo $row['tenl'];?> </option>
								<?php 
							}
						}
						mysqli_close($conn);
						?>   -->

					</select>
					<br><br>
				</form>
			</div>
			<div id="hienthi">
			</div>
		</div>
	</div>
	
	<?php include "modules/footer.php" ?>
	<script>
		function loaddulieu(str) {
			if (str == "") {
				document.getElementById("hienthi").innerHTML = "";
				return;
			} 
			else { 
				if(window.XMLHttpRequest){
					var xhttp = new XMLHttpRequest();
				}
				else{
					var xhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("hienthi").innerHTML =this.responseText;
					}
				};
				console.log(str);
				xhttp.open("GET","laydl.php?q="+str,true);
				xhttp.send();
			}
		}
	</script>
	<script src="javascript/javascript.js"></script>
	
	<!-- <script src="js/javascript.js"></script> -->
</body>
</html>