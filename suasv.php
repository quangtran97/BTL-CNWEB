<?php
    session_start();
    if(isset($_SESSION['username'])&&($_SESSION['quyen'])==2){//tồn tại session thì mới hiển thị trang này

 ?>
<!DOCT
<!DOCTYPE html>
<html lang="en">
<head>
  <title>QUẢN LÝ SINH VIÊN</title>
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
      <li><a href="admin.php">Quản Lý Thành Viên</a></li>
      <li><a href="quanlydiem.php">Quản Lý Điểm</a></li>
      <li><a href="quanlysv.php">Quản Lý Sinh Viên</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['tensv'];?></a></li>
      <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
        
    </div>
  </div>
</nav>
<?php
    $msv=$_GET['id'];//lấy id trên url trang suauser
    //echo $id;
     $sql="select * from sinhvien where masv='$msv'";
     $query=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($query);
     
?>
<div class="container text-center">    
  <div class="row content">
    <h2 class="text-info">SỬA THÔNG TIN SINH VIÊN</h2>
    <div >
        <?php
            if(isset($_POST['submit'])){
                if(empty($_POST['masv']) || empty($_POST['tensv'])|| empty($_POST['tenlop'])|| empty($_POST['tenkhoa'])|| empty($_POST['namsinh'])|| empty($_POST['gioitinh'])|| empty($_POST['quequan']))
                  {
                    echo '<p style="color:red">Vui lòng nhập đầy đủ thông tin</p>';
                  }else{//nếu điền đầy đủ thông tin thì update
                    $masv=$_POST['masv'];
                    $tensv=$_POST['tensv'];
                    $tenlop=$_POST['tenlop'];
                    $tenkhoa=$_POST['tenkhoa'];
                    $namsinh=$_POST['namsinh'];
                    $gioitinh=$_POST['gioitinh'];
                    $quequan=$_POST['quequan'];
                   
                    $sql2="update sinhvien set masv='$masv',tensv='$tensv',tenlop='$tenlop',tenkhoa='$tenkhoa',namsinh='$namsinh' ,gioitinh='$gioitinh',quequan='$quequan' where masv='$msv'  ";
                    $query2=mysqli_query($con,$sql2);
                    if($query2){
                        header('location:quanlysv.php');//nếu câu lệnh truy vấn được được thực thì thì sẽ chuyển hướng đến trang quanlynhac.php
                    }
                    } 
                  }      
            
        ?>
        
    </div>
    <div class="col-md-6 col-md-offset-3">
    <form action="" method="POST">
        <div class="form-group">
            <label  for="">Mã Sinh Viên:</label>
            <input type="text" class="form-control" name="masv" placeholder="Mã Sinh Viên..." value="<?php echo $row['masv']; ?>">
            <label for="">Tên Sinh Viên:</label>
            <input type="text" class="form-control" name="tensv" placeholder="Tên SInh Viên..." value="<?php echo $row['tensv']; ?>">
            <label for="">Lớp:</label>
            <input type="text" class="form-control" name="tenlop" placeholder="Lớp..." value="<?php echo $row['tenlop']; ?>">
            <label for="">Khoa:</label>
            <input type="tex" class="form-control" name="tenkhoa" placeholder="Khoa..." value="<?php echo $row['tenkhoa']; ?>">
            <label for="">Năm Sinh:</label>
            <input type="text" class="form-control" name="namsinh" placeholder="Năm Sinh..." value="<?php echo $row['namsinh']; ?>">
            <label for=""> Giới Tính:</label>
            <input type="text" class="form-control" name="gioitinh" placeholder="Giới Tính..." value="<?php echo $row['gioitinh']; ?>">
            <label for=""> Quê Quán:</label>
            <input type="text" class="form-control" name="quequan" placeholder="Quê Quán..." value="<?php echo $row['quequan']; ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-danger">Sửa</button> 
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
