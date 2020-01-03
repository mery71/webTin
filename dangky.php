<?php include("modules/connection.php");?>
<?php
	if (isset($_POST["btn-dangky"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		$hoten = $_POST["hoten"];
		$email = $_POST["email"];
		
		// if ($username == "" || $password == "" || $hoten == "" || $email == "") {
		// 	echo "bạn vui lòng nhập đầy đủ thông tin";
		// }else{
			$sql = "INSERT INTO user(username, password, hoten, email ) VALUES ( '$username', '$password', '$hoten', '$email')";
			if($conn-> query($sql)===true){
			echo "<script>alert(' Đăng ký thành công');</script>";
			// header('Location: index.php');

		}

			else
				{ echo"<script>alert(' đăng ký không thành công');</script>". $conn->error;}
				$conn->close();
		
	}
 
?>
	<!-- 
	<div class="col-md-1"></div>
						<div class="col-md-4">
							<form action="dangky.php">
								<center><h2>ĐĂNG KÝ</h2></center>
								<div class="form-group">
									<label>Tên người dùng:</label>
									<input type="text" class="form-control" name="username" required="">
								</div>
								<div class="form-group">
									<label>Mật khẩu:</label>
									<input type="password" class="form-control" name="password" required="">
								</div>
								<div class="form-group">
									<label>Họ tên:</label>
									<input type="text" class="form-control" name="hoten" required="">
								</div>
								<div class="form-group">
									<label >Email:</label>
									<input type="email" class="form-control" name="email" required="">
								</div>
								<button type="submit" class="btn btn-primary" name="btn-dangky">Đăng ký</button>
							</form> 
						</div>
						<div class="col-md-1"></div> -->
						