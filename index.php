<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
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
        .content {
            height: 2000px;
            border: 1px solid black;
            display: flex;
        }
        .left {
            background-color: #dc3545;
            height: 100%;
            border: 1px solid black;
            float: left;
            width: 30%;
        }
        .left >p {
            background: white;
            font-size: 20px;
            font-family: Arial;
            text-align: center;
        }
        .categoty {
            background-color: #dc3545;
            height: 500px;
           
        }
        .categoty ul li {
            list-style: none;
            margin: auto;
            margin-left: 20px;
            line-height:1.5;
                
        }

        .categoty ul li a {
            text-decoration: none;
            font-size: 20px;
            margin: 5px;
            padding: 15px;
            color: #ffffff;
        }

        .categoty ul li:hover {
            background-color: black;
            color: red
        }
        .right {
            width: 80%;
            height: 100%;
            background-color: white;
            border: 1px solid double black;
            float: right;
        }
        .right p{
            margin-top: 0px;
        }
        .single-product{
           float: left;
           margin-left: 30px;
           height: 300px;
           width: 250px;
        }
        .single-product img{
            border: 2px solid black;
        }
        .footer{
            text-align: center;
            background: black;
            padding: 5px 0px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class=" Web">
        <div class="Header">
            <div class="Up">
                <ul>
                    <li><p>Trùm giày mô hình Anime - Capvirgo.com</p></li>
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
                    <li><a href="Index.php" target="_blank">Trang chủ</a></li>
                    <li><a href="gioithieu.php" target="_blank">Giới Thiệu</a></li>
                    <li><a href="login.php" target="_blank">Đăng Nhập</a></li>
                    <li><a href="register.php" target="_blank">Đăng ký</a></li>
                    <li><a href="add_product" target="_blank">Thêm Sản Phẩm</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="left">
                <p>DANH MỤC SẢN PHẨM</p>
                <div class="categoty">
                    <ul>
                        <li><a href="Index.php">Monkey D. Luffy</a></li>
                        <li><a href="Index.php">Roronoa Zoro </a></li>
                        <li><a href="Index.php">Sabo</a></li>
                        <li><a href="Index.php">Portgas D. Ace</a></li>
                        <li><a href="Index.php">Uzumaki Naruto</a></li>
                        <li><a href="Index.php">Uchiha Sasuke</a></li>
                        <li><a href="Index.php">Akatsuki</a></li>
                        <li><a href="Index.php">Son Goku</a></li>
                        <li><a href="Index.php">Son Gohan</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <p><img src="luutruanh/head.jpg" width="1140px" height="400px" /></p>
                <div>
                    <?php
                        $connect = mysqli_connect('3.132.234.157','tienloc','tienloc123','tsasm');
                        if(!$connect){
                            echo "Kết nối thất bại";
                        } 
                        $sql="SELECT * FROM product";
                        $result = mysqli_query($connect,$sql);
                        //Tìm và trả về kết quả dưới dạng 1 mảng và lấy từng dòng dữ liệu
                        while($row = mysqli_fetch_array($result))
                        {
                            //lấy ra từng dòng dữ liệu truy vấn được và hiển thị
                            //$row['product_id'];
                            //$row['product_name'];
                            //$row['product_img'];
                            //$row['product_price'];
                    ?>
                        <div class="single-product">
                            <img src="<?php echo $row['product_img']; ?>" height="180px" width="180px" />
                            <h3> <?php echo $row['product_name']; ?></h3>
                            <b>Giá Tiền:<?php echo $row['product_price']; ?></b>
                        </div>
                    <?php
                        }  
                    ?>
                    
                    </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Welcom to my Store</p>
        </div>
    </div>
</body>
</html>