<?php
    session_start();
    if(isset($_SESSION['username'])&&($_SESSION['quyen'])==1){//tồn tại session thì mới hiển thị trang này

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>THÊM USER</title>
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
      <li><a href="quanlyuser.php">Quản Lý User</a></li>
     
      </ul>
      <ul class="nav navbar-nav navbar-right">
     
      <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
        
    </div>
  </div>
</nav>

<div class="container text-center">    
  <div class="row content">
    <h2 class="text-info">THÊM THÔNG TIN USER </h2>
    <div >
        
        
    </div>
    <div class="col-md-6 col-md-offset-3">
    <form action="" method="POST">
        <div class="form-group">
            <label  for="">ID USER</label>
            <input type="text" class="form-control" name="masv" placeholder="ID USER..." >
            <label for="">USERNAME</label>
            <input type="text" class="form-control" name="tensv" placeholder="USERNAME..." >
            <label for="">PASSWORD</label>
            <input type="text" class="form-control" name="tenlop" placeholder="PASSWORD..." >
            <label for="">QUYỀN</label>
            <input type="text" class="form-control" name="tenlop" placeholder="QUYỀN..." >
           
        </div>
        <button type="submit" name="submit" class="btn btn-danger">Thêm</button> 
      </form>
  </div>
  <?php
            if(isset($_POST['submit'])){
               
                  }else{//nếu điền đầy đủ thông tin thì update
                    $id=$_POST['id'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $quyen=$_POST['quyen'];
                   
                   
                     $sql="select * from user where id='$id'";
                     $query= mysqli_query($con,$sql);
                     $num =mysqli_num_rows($query);
                     if($num==1){
                        echo '<p style="color:red">Mã id đã tồn tại</p>';
                     }else{
                    $sql2= "INSERT INTO user (id, username,password,quyen) VALUES ('$id', '$username', '$password','$quyen')";
                    $query2=mysqli_query($con,$sql2);
                   
                    if($query2){
                     
        
                        echo"<script type='text/javascript'>";
                        echo"alert('Thêm user thành công')";
                       
                        echo"</script>";
                    }
                     }
                    } 
                }      
            
        ?>
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
