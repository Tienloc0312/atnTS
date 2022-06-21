<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		 .Web{
            width:100%;
            height: auto;
        }
        .Header {
            width: 100%;
            height: 10%;
            border: 1px solid black;
        }
        .Up {
            background-color: #dc3545;
            width: 100%;
            height: 10%;
            border: 1px solid black;
        }
        .Up ul {
            list-style: none;
        }
        .Up ul li {
            display: inline-block;
            margin: 0 auto;
            font-size: 20px;
            color: #ffffff;
            padding-right: 200px;
        }
        .Up p{
            padding-left:70px;
        }
        .Down{
            height:20%;
            width :100%;

        }
        .Down ul li {
            list-style: none;
            display: inline-block;
            margin: auto
        }
        .logo{
            padding-right:100px;
            vertical-align : middle;
            height: 100px;
            width: 150px;
        }
        .search {
            height: 35px;
            width: 500px;
            border-radius: 5px;
        }
        .search input[type=text] {
            width: 300px;
            height: 30px
        }
        .search input[type=submit] {
            height: 30px
        }
        .mainheader {
            background-color: #dc3545;
            height: 66px;
            border: 1px solid black;
        }
        .mainheader ul li {
            list-style: none;
            display: inline-block;
            margin: auto;
            margin-left: 50px;
            padding-right: 50px;    
        }
        .mainheader ul li a {
            text-decoration: none;
            font-size: 24px;
            margin: 5px;
            padding: 15px;
            color: #ffffff;
        }
        .mainheader ul li:hover {
            background-color: black;
            color: red
        }
        .detail{
        	text-align: center;
        	color: red;
        }

        .content {
            height: 2000px;
            border: 1px solid black;
            display: flex;
        }
        .single-product img{
        	float: right;
        	height: 220px;
        	width: 220px;
        	padding-right: 20px;

        }
        .one img{
        	padding-right: 20px;
        	float: right;
        }
        
	</style>
</head>
<body>
       <div class=" Web">
        <div class="Header">
            <div class="Up">
                <ul>
                    <li><p>Trùm giày thể thao Adidas - Capvirgo.com</p></li>
                    <li>0971062641</li>
                    <li>T2-CN : 8h-21h30</li>
                </ul>
            </div>
            <div class="Down">
                <ul>
                    <li class="logo">
                        <img src="luutruanh/logo.jpg"/>
                    </li>
                    <form method="get" action="search.php">
                        <li class="search">
                        <form method="get" action="search.php">
                            <input type="text" name="user_query" placeholder="Search a Product" />
                            <input type="submit" name="search" value="search" />
                        </form>
                    </li>
                    </form>
                    
                </ul>
            </div>
            <div class="mainheader">
                <ul>
                    <li><a href="http://localhost:8080/PBIT17102/Index.php">Trang chủ</a></li>
                    <li><a href="http://localhost:8080/PBIT17102/gioithieu.php">Giới Thiệu</a></li>
                    <li><a href="http://localhost:8080/PBIT17102/login.php">Đăng Nhập</a></li>
                    <li><a href="http://localhost:8080/PBIT17102/register.php">Đăng ký</a></li>
                    <li><a href="http://localhost:8080/PBIT17102/add_product.php">Thêm Sản Phẩm</a></li>
                </ul>
            </div>
        </div>
		<div class="detail"><h3>Detail Of Products</h3></div>


		<div class="content">
			<div class="single-product">
				<div class="one">
					<img src="luutruanh/sanpham1.jpg" style="float:right;width: 220px;height: 220px;">
				<p><b style="color:black;">Naruto Tien Nhanh Rensin</b></p>
				<form>
					<table border="1px">
						<tr>
							<td>Giá Tiền</td>
							<td>2.500$</td>
						</tr>
						<tr>
							<td>Tình trạng mặt hàng</td>
							<td>Hết Hàng</td>
						</tr>
						<tr>
							<td>Mã</td>
							<td>CC11</td>
						</tr>
						<tr>
							<td>Danh mục</td>
							<td>Từ khóa</td>
						</tr>
					</table>
				</form>
				<div class="one">
					<img src="luutruanh/sanpham2.jpg" style="float:right;width: 220px;height: 220px;">
				<p><b style="color:black;">Sasuke Rensin Susanoo</b></p>
				<form>
					<table border="1px">
						<tr>
							<td>Giá Tiền</td>
							<td>1.500$</td>
						</tr>
						<tr>
							<td>Tình trạng mặt hàng</td>
							<td>Còn Hàng</td>
						</tr>
						<tr>
							<td>Mã</td>
							<td>CC12</td>
						</tr>
						<tr>
							<td>Danh mục</td>
							<td>Từ khóa</td>
						</tr>
					</table>
				</form>
				<div class="one">
					<img src="luutruanh/sanpham3.jpg" style="float:right;width: 220px;height: 220px;">
				<p><b style="color:black;">Akatsuki</b></p>
				<form>
					<table border="1px">
						<tr>
							<td>Giá Tiền</td>
							<td>3000$</td>
						</tr>
						<tr>
							<td>Tình trạng mặt hàng</td>
							<td>còn Hàng</td>
						</tr>
						<tr>
							<td>Mã</td>
							<td>CC13</td>
						</tr>
						<tr>
							<td>Danh mục</td>
							<td>Từ khóa</td>
						</tr>
					</table>
				</form>
				<div class="one">
					<img src="luutruanh/sanpham4.jpg" style="float:right;width: 220px;height: 220px;">
				<p><b style="color:black;">Luffy Gear 2</b></p>
				<form>
					<table border="1px">
						<tr>
							<td>Giá Tiền</td>
							<td>1.500$</td>
						</tr>
						<tr>
							<td>Tình trạng mặt hàng</td>
							<td>còn Hàng</td>
						</tr>
						<tr>
							<td>Mã</td>
							<td>CC14</td>
						</tr>
						<tr>
							<td>Danh mục</td>
							<td>Từ khóa</td>
						</tr>
					</table>
				</form>
				<div class="one">
					<img src="luutruanh/sanpham5.jpg" style="float:right;width: 220px;height: 220px;">
				<p><b style="color:black;">Luffy Gear 4</b></p>
				<form>
					<table border="1px">
						<tr>
							<td>Giá Tiền</td>
							<td>5.000$</td>
						</tr>
						<tr>
							<td>Tình trạng mặt hàng</td>
							<td>còn Hàng</td>
						</tr>
						<tr>
							<td>Mã</td>
							<td>CC15</td>
						</tr>
						<tr>
							<td>Danh mục</td>
							<td>Từ khóa</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
     </div>
</body>
</html>