<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chi Tiet san pham</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <base href="<?php echo e(asset('')); ?>" />
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="source/css/detail.css">
	

	<script type="text/javascript" src="source/js/jquery.js"></script>
	<script type="text/javascript" src="source/js/main.js"></script>
</head>
<body>
    <div class="group_danhmuc">
        <h2 class="title">Chi tiết sản phẩm </h2>
        <img class="clear" src="source/img/<?php echo e($ct_dichvu->url_anh_km); ?>" alt="" title="">
           <div class="group">
            <span><?php echo e($ct_dichvu->tieude_km); ?></span>
            <span><?php echo e($ct_dichvu->noidung_km); ?></span>
            <p>Đơn giá : <?php echo e($ct_dichvu->giagoc); ?> Đồng</p>
            <p>Thời gian từ : <?php echo e($ct_dichvu->thoigiantu); ?> </p>
            <p>Thời gian đến : <?php echo e($ct_dichvu->thoigianden); ?></p>
        </div>
    </div>
</body>
</html>