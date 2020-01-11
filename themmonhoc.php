<?php
    session_start();
    if(isset($_SESSION['username'])&&($_SESSION['quyen'])==1){//tồn tại session thì mới hiển thị trang này

 ?>
<!DOCT
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thêm Môn Học</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
  <script>
  $(document).ready(function(){
  $(".xoa").click(function(){
    if (confirm("Bạn có muốn môn học này không?")){

    }else{
      return false;
    }
    })
  })
</script>
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
    <h2 class="text-info">DANH SÁCH MÔN HỌC</h2>
    <div class="col-md-6 col-md-offset-3">
    
    </div><br>
    <div class="col-md-10 col-md-offset-1">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Mã Môn Học</th>
        <th>Tên Môn Học</th>
        <th>Số tín chỉ</th>
        <th>Khoa</th>
        <th>Giang viên dạy</th>
        <th>Năm học</th>
        <th>Thêm</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
       <?php
          $sql="SELECT * FROM monhoc ";
          $query=mysqli_query($con,$sql);//truy vấn dữ liệu
          $num =mysqli_num_rows($query);
          if($num>0){//kiểm tra xem có dl không nếu có thì sử dụng vòng lặp để in số dòng cho table
            
            $STT=0;
            while($row=mysqli_fetch_array($query)){
              $STT++;
        ?>
        <tr>
           <td><?php echo $STT;?></td>
           <td><?php echo $row['mamonhoc'];?></td>
           <td><?php echo $row['tenmon'];?></td>
           <td><?php echo $row['sotinchi'];?></td>
           <td><?php echo $row['khoa'];?></td>
           <td><?php echo $row['giangvienday'];?></td>
           <td><?php echo $row['namhoc'];?></td>
          
           <td><a href="themmonhoc1.php" title=""><span class="glyphicon glyphicon-plus"></span></a></td>
           <td><a href="suamonhoc.php?id=<?php echo $row['mamonhoc']?>" title=""><span class="glyphicon glyphicon-pencil"></span></a></td>
           <td><a class="xoa" href="xoamonhoc.php?id=<?php echo $row['mamonhoc']?>" title=""><span class="glyphicon glyphicon-trash"></span></a></td>
         </tr>
         <?php
              }
            }else{
              echo 'Không có dữ liệu';
            }
          ?>
    </tbody>
  </table>
  </div>
</div>
</div><br><br><br><br>

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
      header('location:user.php');
    }
?>
