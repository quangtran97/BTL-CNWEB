<?php
    session_start();
    if(isset($_SESSION['username'])&&($_SESSION['quyen'])==1){//tồn tại session thì mới hiển thị trang này

 ?>
<!DOCT
<!DOCTYPE html>
<html lang="en">
<head>
  <title>QUẢN LÝ ĐIỂM</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<?php
  require('connect.php');
  ?>
<nav class="navbar navbar-inverse  navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index.php"><img src="../images/logothuyloi4.png"  style="width:40px;"  class="img-responsive" alt="mega"></a>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="themmonhoc.php">Thêm Môn Học</a></li>
      <li><a href="themnganhhoc.php">Thêm Ngành Học</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['tensv'];?></a></li>
      <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
        
    </div>
  </div>
</nav>

<div class="container text-center">    
  <div class="row content">
    <h2 class="text-info">THÊM MÔN HỌC</h2>
    <div >
        <?php
            if(isset($_POST['submit'])){
                    if(empty($_POST['mamonhoc']) || empty($_POST['tenmon'])|| empty($_POST['sotinchi'])|| empty($_POST['khoa'])|| empty($_POST['giangvienday'])|| empty($_POST['namhoc']))
                      {
                        echo '<p style="color:red">Vui lòng nhập đầy đủ thông tin</p>';
                      }else{//nếu điền đầy đủ thông tin thì update
                        $mamonhoc=$_POST['mamonhoc'];
                        $tenmon=$_POST['tenmon'];
                        $sotinchi=$_POST['sotinchi'];
                        $khoa=$_POST['khoa'];
                        $giangvienday=$_POST['giangvienday'];
                        $namhoc=$_POST['namhoc'];
                       
                        $sql2="INSERT INTO `monhoc` (`mamonhoc`, `tenmon`, `sotinchi`, `khoa`, `giangvienday`, `namhoc` ) VALUES (NULL, '$mamonhoc', '$tenmon', '$sotinchi', '$khoa', '$giangvienday', '$namhoc')";
                    $query2=mysqli_query($con,$sql2);
                   
                    if($query2){
                     
        
                        echo"<script type='text/javascript'>";
                        echo"alert('Thêm Môn Thành Công!')";
                       
                        echo"</script>";
                     }
                    } 
                  }      
            
        ?>
        
    </div>
    <div class="col-md-6 col-md-offset-3">
    <form action="" method="POST">
        <div class="form-group">
            <label  for="">Mã Môn Học:</label>
            <input type="text" class="form-control" name="mamonhoc" placeholder="Mã Môn Học..." >
            <label for="">Tên Môn Học:</label>
            <input type="text" class="form-control" name="tenmon" placeholder="Tên Môn Học..." >
            <label for="">Số Tín Chỉ:</label>
            <input type="text" class="form-control" name="sotinchi" placeholder="Số Tín Chỉ..." >
            <label for="">Giang Viên Dạy:</label>
            <input type="tex" class="form-control" name="giangvienday" placeholder="Giang Viên Dạy..." >
            <label for="">Khoa:</label>
            <input type="text" class="form-control" name="khoa" placeholder="Khoa...">
            <label for=""> Năm Học:</label>
            <input type="text" class="form-control" name="namhoc" placeholder="Năm Học...">
            
        
        </div>
        <button type="submit" name="submit" class="btn btn-danger">Thêm</button> 
      </form>
  </div>
</div>
</div>
<footer class="container-fluid  ">
<div class="col-sm-4 text-left">
  <img src="../images/logotlu.png" style="width:350px;  height:100px;">
  </div>
  <div class="col-sm-8 text-left">
  
<table style="width:50%">
  
  <tr>
    <td><a href="#">Giới Thiệu</td>
    <td><a href="#">Điều Khoản </td>
    <td><a href="#">Liên Hệ</td>
  </tr>
  <tr>
  <td><a href="#">Quảng Cáo</td>
  <td><a href="#">Ứng Dụng</td>
  <td><a href="#">Góp Ý</td>
  </tr>
  <tr>
  <td><a href="#">Copyright</td>
  <td><a href="#">FAQs</td>
 
  </tr>
</table>
</div>
  </div>
</footer>

</body>
</html>
<?php
    }else{
      header('location:index.php');
    }
?>
