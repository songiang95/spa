<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
  <div class="container">
        <div id="preview-picture">
              
        </div> <!-- end preview-picture -->
        <div class="about-product"> <!-- Thông tin về sản phẩm -->
            <div id="product-name">

                    <h2> Tên Dịch Vụ: {{$dichVu->ten_dichvu}} </h2>
                <div id="status">
                    <span>Tình Trạng:</span> @if ($spKhuyenMai->tinhtrang_km == 1)
                                        Còn khuyến mại
                                        @else 
                                        Hết khuyến mại
                                        @endif
                    
                 </div>  <!-- trạng thái còn hàng hay hết hàng -->
                
           
            </div> <!--end product name -->
            
            <div class="row"> <!-- danh gia san pham va gia tien -->
                <div class="col-sm-8">
                    <p>Giá dịch vụ: {{$spKhuyenMai->giagoc}}</p>

                </div> <!-- giá và số phần trăm khuyến mãi -->
                <div class="col-sm-4"></div> <!-- danh gia bao nhieu sao -->
            </div>
            <div class="endow"> <!--Ưu đãi  -->
               <p>Khuyến mãi: {{$spKhuyenMai->muc_km}}%</p>
            </div>
        </div> <!-- end about product -->

        <div class="supplier"> <!-- Nhà cung cấp sản phẩm -->
            <p>Nhà cung cấp dịch vụ: {{$cuaHang->ten_cuahang}}</p>
        </div>
        <div class="detail-info"><!--Thông tin chi tiết -->
            <h3>Chi Tiết</h3>

            
        </div> 
        <div class="product-description"><!-- Mô tả sản phẩm -->
            <p>{{$spKhuyenMai->noidung_km}}</p>
        </div> 
        <div class="ask-about-product"><!-- Hỏi đáp về sản phẩm -->
            
        </div> 
        <div class="customer-review"><!-- Khách hàng nhận xét-->
            
        </div> 
        <div class="similar-products"><!-- sản phẩm tương tự -->
            
        </div> 
        <div class="viewed-products"><!-- sản phẩm đã xem -->
            
        </div> 
        <div class="contact"> <!-- Liên hệ với nhà cung cấp-->
            
        </div>
        <div class="about-us">
            
        </div>
  </div> <!-- end container -->
    
</body>
</html> 