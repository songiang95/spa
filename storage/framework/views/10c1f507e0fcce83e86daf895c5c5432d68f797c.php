<!DOCTYPE html>
<html lang="en">
<head>
	<title>DICH VU SPA</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <base href="<?php echo e(asset('')); ?>" />
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="source/css/reset.css">
	<link rel="stylesheet" type="text/css" href="source/css/responsive.css">

	<script type="text/javascript" src="source/js/jquery.js"></script>
	<script type="text/javascript" src="source/js/main.js"></script>
</head>
<body>

	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="#"><img src="source/img/logo.png" class="logo" alt="" title=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<!--<li><a href="#">Buy</a></li>
						<li><a href="#">Rent</a></li>
						<li><a href="#">Sell</a></li>
						<li><a href="#">About</a></li>-->
						<li><a href="#">Đăng ký</a></li>
					</ul>
					<a href="#" class="login_btn">Login</a>
				</nav>
				<div class="search-box__bar--29h6">
					<input type="search" id="q" name="q" placeholder="Search in spa" class="search-box__input--O34g" tabindex="1" value="" data-spm-anchor-id="a2o4n.home.search.i0.1905e182YrzRuu">
					<input type="hidden" name="_keyori" value="ss">
					<input type="hidden" name="from" value="input">
					<input type="hidden" name="spm" value="a2o4n.home.search.go.1905e182YrzRuu">
				</div><!--end seach -->
			</div>
		</header><!--  end header section  -->
		
	</section><!--  end hero section  -->
	
	<!-- lấy ra những banner có trả tiền quảng cáo lớn nhất -->
	<div class="banner">
		<div class="anh">
        <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="<?php echo e(route('dvcuahang',$sl->id_cuahang)); ?>"><img src="source/img/<?php echo e($sl->url_anh); ?>"/></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div><!--end banner-->
    
<div class="noidung">
	<div class="group_content">
		<div class="item">
			<h2 class="title">Cửa hàng chính thức</h2>
		</div>
            
            <?php $__currentLoopData = $quangcao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group01">
				<div class="dishe_img">
					<a href="<?php echo e(route('dvcuahang',$qc->id_cuahang)); ?>"><img src="source/img/<?php echo e($qc->url_anh); ?>" alt="" title=""></a>					
				</div>
			
			</div><!--end group01-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $km_muc_desc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $muc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group01">
				<div class="dishe_img">
					<a href="<?php echo e(route('chitietdichvu',$muc->id_khuyenmai)); ?>"><img src="source/img/<?php echo e($muc->url_anh_km); ?>" alt="" title=""></a>					
				</div>
			
			</div><!--end group01-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div><!--end group danh muc-->
   <div class="clear"></div>

   <div class="group_content">
		<div class="item">
			<h2 class="title">Dịch vụ spa</h2>
		</div>         
            
            <?php $__currentLoopData = $dsdv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="box01">
				<div class="box-img">
					<a href="<?php echo e(route('chitietdichvu',$sp->id_khuyenmai)); ?>"><img src="source/img/<?php echo e($sp->url_anh); ?>" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="<?php echo e(route('chitietdichvu',$sp->id_khuyenmai)); ?>"><h2 class="span"><?php echo e($sp->tieude_km); ?></h2></a>
					<h3 class="style"><?php echo e($sp->muc_km); ?></h3>
				</div>
				<ul class="rating">
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div><!--end group danh muc-->
   <div class="clear"></div>
   <div class="group_content">
		<div class="item">
			<h2 class="title">Danh mục ưu thích</h2>
		</div> 
        
         <?php $__currentLoopData = $spdg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group01">
				<div class="dishe_img">
					<a href="<?php echo e(route('chitietdichvu',$dg->id_khuyenmai)); ?>"><img src="source/img/<?php echo e($dg->url_anh_km); ?>" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="<?php echo e(route('chitietdichvu',$dg->id_khuyenmai)); ?>"><h2 class="span"><?php echo e($dg->tieude_km); ?></h2></a>
					<h3 class="style"><?php echo e($dg->muc_km); ?></h3>
				</div>
				<ul class="rating">
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="clear"></div>
        
     </div>  
     <div class="group_content">
		<div class="item">
			<h2 class="title">Dịch vụ đã xem</h2>
		</div>         
            
            <?php $__currentLoopData = $spdx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group01">
				<div class="box-img">
					<a href="<?php echo e(route('chitietdichvu',$dx->id_khuyenmai)); ?>"><img src="source/img/<?php echo e($dx->url_anh_km); ?>" alt="" title=""></a>					
				</div>
				<div class="dish_info">
					<a href="<?php echo e(route('chitietdichvu',$dx->id_khuyenmai)); ?>"><h2 class="span"><?php echo e($dx->tieude_km); ?></h2></a>
					<h3 class="style"><?php echo e($dx->muc_km); ?></h3>
				</div>
				<ul class="rating">
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="sao"></li>
					<li class="no-star"></li>
				</ul>
			</div><!--end group01-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div><!--end group danh muc--> 
   <div class="clear"></div>    
			
</div>
	
	<footer>
		<div class="wrapper footer">
				<li class="links">
					<ul>
						<li><a href="#">Điện thoại tư vấn</a></li>
						<li><a href="#">Đặt Hàng</a></li>
						<li><a href="#">Terms</a></li>
					</ul>
				</li>

				
		
	</footer><!--  end footer  -->
	
</body>
</html>