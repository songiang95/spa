
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Sản phẩm trong spa</title>
    <base href="{{asset('')}}" />
	<link rel="stylesheet" type="text/css" href="source/css/detail.css">
    <link rel="stylesheet" type="text/css" href="source/css/reset.css">
	<link rel="stylesheet" type="text/css" href="source/css/responsive.css">

</head>

<body>
	
    <div class="group_danhmuc">
        <h1>{{$ten->ten_cuahang}}</h1>
        <h2 class="title">Chi tiết sản phẩm</h2>
        @foreach($sp_cuahang as $sp)
        
        <div>
        
        <img class="clear" src="source/img/{{$sp->url_anh_km}}" alt="" title="">
           <div class="group">
            <span>{{$sp->tieude_km}}</span>
            <p>Đơn giá : {{$sp->giagoc}} Đồng</p>
            
            </div>
           </div>
           @endforeach
    </div>
	

</body>

</html>