
<!DOCTYPE html>
    <html lang="en">

    <head>
        <title> QUẢN LÝ ĐIỂM </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/layout.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
        <script>
          
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
                    <a class="navbar-brand" href="index.php"><img src="../images/logothuyloi4.png"  style="width:40px;"  class="img-responsive" alt="thuyloi"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                        <li><a href="diemsinhvien.php">Quản Lý ĐIỂM</a></li>
                        <li><a href="giangvien.php">Gỉang Viên</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      
                        <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="container text-center">
            <div class="row content">
                <h2 class="text-info">DANH SÁCH ĐIỂM CỦA BẠN</h2>
                <div class="col-md-6 col-md-offset-3">
                    <form class="" action="" method="get">
                       
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
                <div class="col-md-12 col-md-offset-">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>TênSV</th>
                                <th>MSV</th>
                                <th>Mã học phần</th>
                                <th>Tên học phần</th>
                                <th>Số tín chỉ</th>
                                <th>Điểm Qtrinh</th>
                                <th>Điểm thi</th>
                                <th>TKPH</th>
                                <th>Điểm chữ</th>
                                <th>Năm học</th>
                                <th>Học kỳ</th>
                                <th>Giai đoạn</th>
                            </tr>
                        </thead>
                        
                      
                    </table>
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