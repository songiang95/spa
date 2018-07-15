
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Sản phẩm trong spa</title>
    <base href="<?php echo e(asset('')); ?>" />
	<link rel="stylesheet" type="text/css" href="source/css/detail.css">
    <link rel="stylesheet" type="text/css" href="source/css/reset.css">
	<link rel="stylesheet" type="text/css" href="source/css/responsive.css">

</head>

<body>
	
    <div class="group_danhmuc">
        <h1><?php echo e($ten->ten_cuahang); ?></h1>
        <h2 class="title">Chi tiết sản phẩm</h2>
        <?php $__currentLoopData = $sp_cuahang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <div>
        
        <img class="clear" src="source/img/<?php echo e($sp->url_anh_km); ?>" alt="" title="">
           <div class="group">
            <span><?php echo e($sp->tieude_km); ?></span>
            <p>Đơn giá : <?php echo e($sp->giagoc); ?> Đồng</p>
            
            </div>
           </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
	

</body>

</html>