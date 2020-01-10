<?php
    session_start();
    if(isset($_SESSION['username'])&&($_SESSION['quyen'])==0){//tồn tại session thì mới hiển thị trang này

 ?>
<!DOCT
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BẢNG ĐIỂM SINH VIÊN </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
  <script>
  $(document).ready(function(){
  $(".xoanhac").click(function(){
    if (confirm("Bạn có muốn xóa không bài hát này không?")){

    }else{
      return false;
    }
    })
  })
</script>
</head>
<body>
<?php require('connect.php'); ?>
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
      <li><a href="user.php">Thông Tin Sinh Viên</a></li>
      <li><a href="diemsv.php">Tra Cứu Điểm Học Tập</a></li>
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
    <div class="col-md-8 col-md-offset-8">
    <?php
          $name=$_SESSION['username'];  
          $sql="SELECT * FROM sinhvien where masv ='$name'";
          $query=mysqli_query($con,$sql);//truy vấn dữ liệu
          $row=mysqli_fetch_array($query)
        ?>
         <div class=" text-left">
    <h3 class="text-info">Mã Sinh Viên : <b><i> <?php echo $row['masv'];?></i></b></h3>
    <h3 class="text-info">Tên Sinh Viên: <b><i><?php echo $row['tensv'];?></i></b></h3>
    <h3 class="text-info">Lớp: <b><i><?php echo $row['tenlop'];?></i></b></h3>
    <h3 class="text-info">Khoa: <b><i><?php echo $row['tenkhoa'];?></i></b></h3>
        
  </div><br><br>
    </div><br><br><br><h2 class="text-danger"><b>Bảng Điểm </b></h2>
    <div class="col-md-6 col-md-offset-3">
    <form action="ketqua_sv_timkiem_diem.php" method="get">
    Tên môn học : <input type="text"  id="txtsearch" name="keyword" placeholder="môn học..."><br><br>
    Tên học kỳ  : <input type="text"  id="txtsearch" name="keyword2" placeholder="học kỳ..."><br><br>
    Tên năm học :<input type="text"  id="txtsearch" name="keyword3" placeholder="năm học..."><br><br>
    <button type="submit">Tìm kiếm</button>
</form>
    </div><br>
    <div class="col-md-6 col-md-offset-3">
    <table class="table table-bordered">
    <thead>
    <tr>
      <th>STT</th>
         <th>Tên Môn</th>
        <th> Quá Trình</th>
        <th> Thi</th>
        <th>TKHP</th>
        <th>Điểm Chữ</th>
        <th>Học Kỳ</th>
        <th>Năm Học</th>
        
      </tr>
    </thead>
    <tbody>
       <?php
          $keyword=$_GET['keyword'];
          $keyword2=$_GET['keyword2'];
          $keyword3=$_GET['keyword3'];
          
          $sql2="SELECT * FROM diem  where tenmon like'%$keyword%'and  tenhocky like'%$keyword2%'and tennamhoc like'%$keyword3%' and  masv='$name'" ;
          $query2=mysqli_query($con,$sql2);//truy vấn dữ liệu
          $num2 =mysqli_num_rows($query2);
          if($num2>0){//kiểm tra xem có dl không nếu có thì sử dụng vòng lặp để in số dòng cho table
            
            $STT2=0;
            echo'<h3 class="text-info">KẾT QUẢ TÌM KIẾM </h3>';
            
            while($row2=mysqli_fetch_array($query2)){
              $STT2++;
        ?>
        <tr>
           <td><?php echo $STT2;?></td>
            <td><?php echo $row2['tenmon'];?></td>
           <td><?php echo $row2['diemquatrinh'];?></td>
           <td><?php echo $row2['diemthi'];?></td>
           <td><?php echo $row2['diemtong'];?></td>
           <td><?php echo $row2['diemchu'];?></td>
           <td><?php echo $row2['tenhocky'];?></td>
           <td><?php echo $row2['tennamhoc'];?></td>
             </tr>
         <?php
              }
            }else{
                echo '<h3 style="color:red">Không có kết quả phù hợp với từ khóa !';
               
            }
          ?>
          
    </tbody>
  </table>
  </div>
 
</div><br><br><br><br>
</div>

<<footer class="container-fluid  ">
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
      header('location:admin.php');
    }
?>
