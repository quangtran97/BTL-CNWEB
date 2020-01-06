<?php
    session_start();
    if(isset($_SESSION['username'])&&($_SESSION['quyen'])==1){//tồn tại session thì mới hiển thị trang này

 ?>
<!DOCT
<!DOCTYPE html>
<html lang="en">
<head>
  <title>QUẢN TRỊ HỆ THỐNG</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
  <script>
  $(document).ready(function(){
  $(".xoa").click(function(){
    if (confirm("Bạn có muốn xóa không?")){

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
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="admin.php">Quản Lý Thành Viên</a></li>
      <li><a href="quanlynhac.php"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
      <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
        
    </div>
  </div>
</nav>
<div class="container text-center">    
  <div class="row content">
    <h2 class="text-info">DANH SÁCH THÀNH VIÊN</h2>
    <div class="col-md-6 col-md-offset-3">
    <form class="" action="" method="get"><?php //sử dụng get để hiển thị từ khóa tìm kiếm lên url?>
        <div class="form-group input-group">
          <input type="text" class=" form-control" id="txtsearch" name="keyword" placeholder="Tìm Kiếm...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button" id="searchbutton">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
       </form>
    </div><br>
    <div class="col-md-10 col-md-offset-1">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>quyen</th>
        
        <th>Tên</th>
        <th>email</th>
        <th>sdt</th>
        <th>Thêm</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
       <?php
        
          $sql="SELECT * FROM sinhvien ";
          $query=mysqli_query($con,$sql);//truy vấn dữ liệu
          $num =mysqli_num_rows($query);
          if($num>0){//kiểm tra xem có dl không nếu có thì sử dụng vòng lặp để in số dòng cho table
            
            $STT=0;
            while($row=mysqli_fetch_array($query)){
              $STT++;
        ?>
        <tr>
           <td><?php echo $STT;?></td>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['username'];?></td>
           <td><?php echo $row['password'];?></td>
           <td><?php echo $row['quyen'];?></td>
           <td><?php echo $row['Tên'];?></td>
           <td><?php echo $row['email'];?></td>
           <td><?php echo $row['sdt'];?></td>
           <td><a href="dangky.php" title=""><span class="glyphicon glyphicon-plus"></span></a></td>
           <td><a href="suauser.php?id=<?php echo $row['id']?>" title=""><span class="glyphicon glyphicon-pencil"></span></a></td>
           <td><a class="xoa" href="xoauser.php?id=<?php echo $row['id']?>" title=""><span class="glyphicon glyphicon-trash"></span></a></td>
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
</div>

<footer class="container-fluid text-center">
 
  <p></p>
</footer>

</body>
</html>
<?php
    }else{
      header('location:user.php');
    }
?>
