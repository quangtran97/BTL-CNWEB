<!DOCTYPE html>
<html lang="en">
<head>
<title>Điểm học tập</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="bd" class="wide fs3">

<div id="ja-wrapper">

<!-- BEGIN: HEADER -->
<div id="ja-header" class="clearfix">
	<h1 class="logo">
		<a href="#" title="Course Management System"><span>Course Management System</span></a>
	</h1>
</div>
<!-- END: HEADER -->

<!-- BEGIN: MAIN NAVIGATION -->
<div id="ja-mainnavwrap">
	<div id="ja-mainnav">
		<ul id="ja-cssmenu" class="clearfix">
			<li class=""><a href="khoahoc.html" class="menu-item0" id="menu1" title="Home"><span class="menu-title">QL Khóa học</span></a></li> 
			<li class=""><a href="dangki.html" class="menu-item1" id="menu82" title="Job Board Features"><span class="menu-title">QL Đăng ký</span></a></li> 
			<li class="active"><a href="dshocvien.html" class="menu-item2 active first-item" id="menu83" title="FAQs"><span class="menu-title">QL Học viên</span></a></li> 
			<li class=""><a href="lapdanhsachthi.html" class="menu-item3" id="menu85" title="Forums"><span class="menu-title">QL Thi</span></a></li> 
			<li class=""><a href="thongke.html" id="menu86" title="Documentation (Beta)"><span class="menu-title">Thống kê</span></a></li> 
			<li class=""><a href="hethong.html" id="menu86" title="Documentation (Beta)"><span class="menu-title">Hệ thống</span></a></li> 
			<li class=""><a href="#" id="menu86" title="Documentation (Beta)"><span class="menu-title">Đăng xuất</span></a></li> 
		</ul>
	</div>

	<div id="ja-search">
		<form action="../New Folder/theme1/index.php" method="post">
		<div class="search">
			<input name="searchword" id="mod_search_searchword" maxlength="20" alt="Search" class="inputbox" size="20" value="search..." onblur="if(this.value=='') this.value='search...';" onfocus="if(this.value=='search...') this.value='';" type="text">	</div>
		<input name="task" value="search" type="hidden">
		<input name="option" value="com_search" type="hidden">
		</form>
	</div>
	
</div>

<!-- END: MAIN NAVIGATION -->



<div id="ja-containerwrap-fr">
<div id="ja-container">
<div id="ja-container2" class="clearfix">

<div id="ja-mainbody" class="clearfix">

<!-- BEGIN: CONTENT -->
		<div class="title-module">DANH SÁCH HỌC VIÊN</div>
				<div class="filter">
					<div class="label"><strong>Chương trình:</strong></div>
				  <div class="value"><select name="chuongtrinh_dshocvien">
                <option>CCNA</option>
                <option>CCNA Security</option>
                <option>Linux</option>
                <option>Exchange</option>
                <option>CCNP hoặc Module</option>
                <option>MCSA hoặc Exam</option>
                <option>MCSE hoặc Exam</option>
                <option>Chương trình khác</option>
              </select>     </div>		
			  <div class="label"><strong>Lớp học:</strong></div>
				  <div class="value"><select name="lophoc_dshocvien">
                <option>CCNA0809A</option>
                <option>CCNA0809B</option>
              </select>     </div>		
				</div>
			  <div class="list-course">
					<table class="list-course" bgcolor="#FFFFFF">
						<tr class="row-first">
							<td width="30">Sửa</td>
							<td width="30">Xóa</td>
                            <td width="30">STT</td>
							<td width="150">Chương trình</td>
							<td width="150">Lớp học</td>
                            <td width="150">Tên học viên</td>
							<td width="122">Lịch học</td>
							<td width="80">Giáo viên </td>
						</tr>
						<tr>
							<td><a href="sualophoc.html"><img src="images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="images/deleted.jpg" border="0"></a></td>
                            <td>1</td>
							<td><a href="lop_hocsinh.html">CCNP hoặc Module</a></td>
							<td>CCNA0809A</td>
                            <td>Nguyễn Văn A</td>
							<td>Từ 18h-20h, Thứ 2,4,6</td>
							<td>Đặng Thành Trung </td>
						</tr>
						<tr>
							<td><a href="sualophoc.html"><img src="images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="images/deleted.jpg" border="0"></a></td>
                            <td>2</td>
							<td ><a href="lop_hocsinh.html">CCNP hoặc Module</a></td>
							<td>CCNA0809A</td>
							<td>Nguyễn Văn B</td>
							<td>Từ 18h-20h, Thứ 2,4,6</td>
							<td>Đặng Thành Trung </td>
						</tr>
						<tr>
							<td><a href="sualophoc.html"><img src="images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="images/deleted.jpg" border="0"></a></td>
                            <td>3</td>
							<td ><a href="lop_hocsinh.html">CCNP hoặc Module</a></td>
							<td>CCNA0809A</td>
                            <td>Nguyễn Văn C</td>
							<td>Từ 18h-20h, Thứ 2,4,6</td>
							<td>Đặng Thành Trung </td>
						</tr><tr>
							<td><a href="sualophoc.html"><img src="images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="images/deleted.jpg" border="0"></a></td>
                            <td>4</td>
							<td ><a href="lop_hocsinh.html">CCNP hoặc Module</a></td>
							<td>CCNA0809A</td>
                            <td>Nguyễn Văn D</td>
							<td>Từ 18h-20h, Thứ 2,4,6</td>
							<td>Nguyễn Thế Lộc</td>
						</tr><tr>
							<td><a href="sualophoc.html"><img src="images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="images/deleted.jpg" border="0"></a></td>
                            <td>5</td>
							<td ><a href="lop_hocsinh.html">CCNP hoặc Module</a></td>
							<td>CCNA0809A</td>
                            <td>Nguyễn Văn E</td>
							<td>Từ 18h-20h, Thứ 2,4,6</td>
							<td>Nguyễn Thế Lộc </td>
						</tr><tr>
							<td><a href="sualophoc.html"><img src="images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="images/deleted.jpg" border="0"></a></td>
                            <td>6</td>
							<td ><a href="lop_hocsinh.html">CCNP hoặc Module</a></td>
							<td>CCNA0809A</td>
                            <td>Nguyễn Văn F</td>
							<td>Từ 18h-20h, Thứ 2,4,6</td>
							<td>Nguyễn Thế Lộc </td>
						</tr>
						<tr>
							<td><a href="sualophoc.html"><img src="images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="images/deleted.jpg" border="0"></a></td>
                            <td>7</td>
							<td ><a href="lop_hocsinh.html">CCNP hoặc Module</a></td>
							<td>CCNA0809B</td>
                            <td>Nguyễn Văn G</td>
							<td>Từ 18h-20h, Thứ 2,4,6</td>
							<td>Nguyễn Thế Lộc</td>
						</tr>
						
					</table>
					<div class="task"><a href="themlophoc.html"><input type="button" value="Thêm mới" name="Thêm mới"></a>
									<input type="button" name="Xóa" value="Xóa"> 
									<a href="sualophoc.html"><input type="button" name="Cập nhật" value="Cập nhật"></a>
					</div>
			    </div>
<!-- END: CONTENT -->
 		
</div>
		
<!-- BEGIN: LEFT COLUMN -->
<div id="ja-col1">
	<div class="moduletable_menu">
		<h3>Main Menu</h3>
			<ul class="menu">
			<li id="current" class="active item1"><a href="dshocvien.html"><span>Danh sách học viên</span></a></li>
			<li class="item82"><a href="diemdanh.html"><span>QL Điểm danh</span></a></li>
			<li class="item83"><a href="chuyenlop.html"><span>QL Chuyển lớp</span></a></li>
			<li class="item85"><a href="#"><span>Gửi thông báo tới học viên</span></a></li>
			</ul>		
	</div>
	</div>
</div>

<!-- END: LEFT COLUMN -->
	
</div></div></div>



<!-- BEGIN: FOOTER -->
<div id="ja-footer" class="clearfix">

	
	<small>Copyright © 2009 TTTH Ứng dụng - Khoa CNTT. Designed by 
<a href="#" title="Visit Joomlart.com!" target="blank">TTTH</a>.</small>
<!--<small><a href="http://www.joomla.org">Joomla!</a> is Free Software released under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU/GPL License.</a></small> -->


</div>
<!-- END: FOOTER -->

</div>



</body></html>