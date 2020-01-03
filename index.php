
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ngô Thị Lạc</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
    	$("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
    	$("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
    	$("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
    	$("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
    	$("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
    	$("#myCarousel").carousel("next");
    });
});
</script>
</head>
<body>

	<div id="wraper">

		<div id="header"><img src="image/bg.jpg" ></div>
		<div id= "menu" >

			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-tabs">

						<li><a href="index.php"><span type="button" class="glyphicon glyphicon-home" ></span> Trang chủ</a></li>
						<li><a href=""><span type="button" class="glyphicon glyphicon-user"></span> Giới thiệu</a></li>
						<li><a href=""><span type="button" class="glyphicon glyphicon-star"></span> Sự kiện</a></li>
						<li><a href=""><span type="button" class="glyphicon glyphicon-film"></span> Tài liệu</a></li>
						<li><a href=""><span type="button" class="glyphicon glyphicon-pencil"></span> Đào tạo</a></li>
						<li><a href=""><span type="button" class="glyphicon glyphicon-comment"></span> Tư vấn</a></li>
						<li><a href=""><span type="button" class="glyphicon glyphicon-envelope"></span> Liên hệ</a></li>
					</ul>
				</div>    

			</div>

		</div>

		<div id="main">
			<div id="right" >
				<div id="Khoihinh">
					
					<div class="container">
						<div id="myCarousel" class="carousel slide">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li class="item1 active"></li>
								<li class="item2"></li>
								<li class="item3"></li>
								<li class="item4"></li>
								<li class="item5"></li>
								<li class="item6"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">

								<div class="item active">
									<img src="image/thieunhi.jpg" >
									
								</div>

								<div class="item">
									<img src="image/kl.jpg" >
								</div>
								
								<div class="item">
									<img src="image/trai.jpg" >
								</div>

								<div class="item">
									<img src="image/chuyen.jpg">
								</div>
								<div class="item">
									<img src="image/k6.jpg">
								</div>
								<div class="item">
									<img src="image/k3.jpg">
								</div>
								
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" role="button">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				<p>TIN TỨC & SỰ KIỆN</p>
				<div id="khoi1">
					<ul>
						<li><a href="">
							<img src="image/thieunhi.jpg"></a>
							<h2> Ngày quốc tế thiếu nhi 1/6</h2>

							Khoa tin tổ chức tết thiếu nhi cho trẻ em phường Phú Cát
						</li>
						<li>
							<a href=""><img src="image/chơi.jpg"></a>
							<h2> Tổ chức dã ngoại cho sinh viên</h2>

							Ngày 26/5 Khoa tổ chức dã ngoại cắm trại tại biển Tân Cảnh Dương.Toàn thể sinh viên cùng các thầy cô trong khoa đã có những kỷ niệm thật là đẹp.....
						</li>
						<li>
							<a href=""><img src="image/gl.jpg"></a>
							<h2> Giao lưu với công ty Gameloft Đà Nẵng</h2>

							Sinh viên khoa tin đã có những trải nghiệm thú vị với các trò chơi tại buổi giao lưu với các anh chị trong công ty gamloft...
						</li>
					</ul>
				</div>
				<div id="khoi1">
					<ul>
						<li>
							<a href=""><img src="image/chuyen.jpg"></a>
							<h2> Giải bóng chuyền cán bộ giảng viên </h2>

							Các thầy cô khoa tin học đã bước qua những trận đấu rất quyết liệt....
						</li>
						<li>
							<a href=""><img src="image/bong.jpg"></a>
							<h2> Giải bóng đá trường ĐHSP Huế 2018</h2>

							Đội bóng nam vs nữ khoa tin tham gia giải bóng đá toàn trường....
						</li>
						<li>
							<a href=""><img src="image/83.jpg"></a>
							<h2> Ngày quốc tế phụ nữ</h2>

							Sinh viên tặng hoa cho các cô trong khoa nhân ngày quốc tế phụ nữ..
						</li>
					</ul>
				</div>
				<div id="Khoi4">
					<img src="image/dđ - Copy.jpg" id="icon" alt="diễn đàn"  border="2px" solid="cyan" width="200" height="175">
				</br>
				<h1> Diễn đàn</h1>
			</div>
			<div id="Khoi5">
			<a href="">	<img src="image/tl.jpg" id="icon" alt="Tài liệu"  border="2px" solid="cyan" width="200" height="175"></a>
			</br>
			<h1> Tài liệu học </h1>
		</div>
		<div id="Khoi6">
			<img src="image/event.png" id="icon" alt="sự kiện"  border="2px" solid="cyan" width="200" height="175">
		</br>
		<h1> Sự kiện</h1>
	</div>
</div>
<div id="left">
	<div class="menu_left">
		<h3> Chuyên mục đào tạo</h3>
		<ul>
			<li><a href=""> Thông báo</a></li>
			<li><a href="#" onclick="gioithieu();"> Giới thiệu khoa</a></li>
			<li><a href=""> Cơ cấu tổ chức </a></li>
			<li><a href="#" onclick="to();"> Các tổ chuyên môn</a></li>
			<li><a href=""> Lịch công tác của đơn vị</a></li>
			<li><a href=""> Thông tin từ cơ sở dữ liệu</a></li>
			<li><a href=""> Dành cho CB, Giảng viên</a></li>
			<li><a href="#" onclick="danhsach();"> Dành cho sinh viên</a></li>
			<li><a href=""> Hướng nghiệp</a></li>

		</ul>
	</div>
	<div class="anh">
		<a href=""><img src="image/2018.jpg" id="icon" ></a>
	</div>
	<div class="video">
		<video width="354px" height="270px" controls>
			<source src="image/Giới thiệu về trường ĐHSP Huế.mp4" type="video/mp4" media="">
			</video>

		</div>
		<div class="anh">
			<a href=""><img src="image/Hb.jpg" id="icon"></a>
		</div>
		<div class="anh">
			<a href=""><img src="image/td.jpg" id="icon"></a>
		</div>
	</div>
</div>

<div id="footer">	
	
	<div class="khoinho">
		<h3 >Tuyển sinh & đào tạo</h3>
		<ul>
			<li><a href="">Thông tin tuyển sinh</a></li>
			<li><a href="">Đào tạo đại học</a></li>
			<li><a href="">Đào tạo sau đại học</a></li>
			<li><a href="">Đào tạo thường xuyên</a></li>
		</ul>
	</div>
	<div class="khoinho">
		<h3 >Các liên kết khác</h3>
		<ul>
			<li><a href="">Thư viện</a></li>
			<li><a href="">E-Learning</a></li>
			<li><a href="">Email</a></li>
			<li><a href="">Hệ thống thông tin sinh viên</a></li>
			<li><a href="">Hệ thống tác nghiệp</a></li>
		</ul>
	</div>
	<div class="khoinho">
		<h3>Kết nối</h3>
		<ul >
			<li><a href="https://www.facebook.com/groups/khoatindhsphue/">Facebook</a></li>
			<li><a href="">Youtube</a></li>
		</ul>
	</div>
	<div class="khoinho">
		<h3>Lượt truy cập</h3>
		<ul>
			<li>Tổng số: <b>1800</b></li>
			<li>Thành viên: <b>500</b></li>
			<li>Website: khoatindhsph.edu.vn</li>
		</ul>
	</div>			
	
</div>

</div>	   
<script src="js/javascript.js"></script>   
<script>
	function gioithieu() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("right").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "gioithieu.php", true);
		xmlhttp.send();
	}
</script>
<script>
	function danhsach() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("right").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "dangnhap.php", true);
		xmlhttp.send();
	}
</script>
</body>
</html>