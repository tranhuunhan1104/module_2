<?php
 include_once('../db/connect.php');
 ?>
 <?php
	// if(isset($_POST['themdanhmuc'])){
	// 	$tendanhmuc = $_POST['danhmuc'];
	// 	$sql_insert = mysqli_query($con,"INSERT INTO tb_category(category_name) value ('$tendanhmuc')");
	// }elseif(isset($_POST['capnhatdanhmuc'])){
	// 	$id_post = $_POST['id_danhmuc'];
	// 	$tendanhmuc = $_POST['danhmuc'];
	// 	$sql_update = mysqli_query($con,"UPDATE tb_category SET category_name='$tendanhmuc' WHERE category_id='$id_post'");
	// 	header('Location:xulydanhmuc.php');
	// }
	// if(isset($_GET['xoa'])){
	// 	$id = $_GET['xoa'];
	// 	$sql_xoa = mysqli_query($con,"DELETE FROM tb_category WHERE category_id='$id'");
	// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Đơn hàng <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="xulydanhmuc.php">Danh mục</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="xulysanpham.php">Sản phẩm</a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="#">Khách hàng</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav><br><br>
	<div class="container">
	<div class="row">
		<?php
		// if(isset($_GET['quanli']) == 'capnhat'){
		// 	$id_capnhat = $_GET['id'];
		// 	$sql_capnhat = mysqli_query($con,"SELECT * FROM tb_category WHERE category_id='$id_capnhat'");
		// 	$row_capnhat = mysqli_fetch_array($sql_capnhat);
			?>
			<!-- <div class="col-md-4">
		<h4>Cập nhật danh mục</h4>
		<label>Tên danh mục</label>
		<form action="" method="POST">
			<input type="text" class="form-control" name="danhmuc" value="<?php echo $row_capnhat['category_name'] ?>"><br>
			<input type="hidden" class="form-control" name="id_danhmuc" value="<?php echo $row_capnhat['category_id'] ?>"><br>
			<input type="submit" name="capnhatdanhmuc" value="Cập nhật danh mục" class="btn btn-default">
		</form>
	    </div> -->
		<?php
		// }else{
    ?>
		<div class="col-md-4">
		<h4>Thêm sản phẩm</h4>
		<label>Tên sản phẩm</label>
		<form action="" method="POST">
		<input type="text" class="form-control" name="tensanpham" placeholder="Tên danh mục"><br>
		<input type="submit" name="themdanhmuc" value="Thêm sản phẩm" class="btn btn-default">
		</form>
	</div>
		<?php
// }
			?>
	<div class="col-md-8">
		<h4>Liệt kê sản phẩm</h4>
		<?php
		// $sql_select = mysqli_query($con,"SELECT * FROM tb_category ORDER BY category_id DESC")
		?>
		<table class="table table-bordered ">
			<tr>
				<th>Thứ tự</th>
				<th>Tên sản phẩm</th>
				<th>Quản lí</th>
				
			</tr>
			<?php
// 			$i = 0;
// while ($row_category = mysqli_fetch_array($sql_select)) {
// 	$i++;
    ?>
				<tr>
					<td>1</td>
					<td>fdf</td>
					<td><a href="">Xóa</a> || <a href="">Cập nhật</a></td>
				</tr>
			 <?php
// }
			 ?>
		</table>
	</div>
	</div>
	</div>
	
</body>
</html>









