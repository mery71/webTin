
<?php
session_start();
 
?>
<?php include("modules/connection.php");?>
<?php 
if (isset($_POST["btn-dangnhap"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	// if ($username == "" || $password =="") {
	// 	echo "username hoặc password bạn không được để trống!";
	// }else{
		$sql = "select * from user where username = '$username' and password = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "<script>alert('tên đăng nhập hoặc mật khẩu không đúng !');</script>";
			// header('Location:index.php');
		}else{
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["hoten"];
				
	    	}
	    				header('Location:ds.php');}

	}


?>
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
			echo "<script>alert('Xin chào, bạn đã đăng ký thành công');</script>";
			header('Location: index.php');

		}

			else
				{ echo"<script>alert('không thành công');</script>". $conn->error;}
				$conn->close();
		}
 
?>
	
  <div class="container" style="margin-top: 5em;">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-4">
							<form action="dangnhap.php" method="POST" enctype="mutipart/form-data" >
								<center><h2>ĐĂNG NHẬP</h2></center>
								<div class="form-group">
									<label >Tên người dùng</label>
									<input type="text" class="form-control" name="username" required="">
								</div>
								<div class="form-group">
									<label >Mật khẩu:</label>
									<input type="password" class="form-control" name="password" required="">
								</div>
								<button type="submit" class="btn btn-primary" name="btn-dangnhap">Đăng nhập</button>
							</form> 
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-1"></div>
						<div class="col-md-4">
							<form action="dangky.php" method="POST" enctype="mutipart/form-data">
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
						<div class="col-md-1"></div>
						
					</div>
				</div>