<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Đăng kí thông tin</title>
</head>
<body>
   
    
    <script type="text/javascript">
        function sb(){
            alert("Đăng kí thành công")
            location.replace()
        }
        function password() {
            var password=document.getElementById("form-control");
            var pass = password.value;
        }
    </script>
    <div id="wrapper">
        <div class="container">
            <div class="row">
               <form action="đktt.php" class="col-md-6 bg-light p-3 my-3" method="post">
                    <h1 class="text-center text-uppercase h3 py-3">Đăng kí tài khoản</h1>
                    
                    <div class="form-group">
                        <label for="fullname">Họ và tên</label>
                       <input type="text" name="fullname" id="fullname" 
                       class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="usename">Tên đăng nhập</label>
                       <input type="text" name="usename" id="usename" 
                       class="form-control">

                    </div>

                    <div class="form-group">    
                        <label for="password">Mật khẩu</label>
                       <input type="password" name="password" id="password" 
                       class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                       <input type="email" name="email" id="email" 
                       class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="birthday">Ngày sinh</label>
                        <input type="date" name="birthday" id="birthday"
                         class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="Gender">Giới tính</label>
                        <div>
                             <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="male" 
                                value="male">
                                <label for="male" class="form-check-label">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="female" 
                                value="female">
                                <label for="female" class="form-check-label">Nữ</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-grounp">
                        <label for="city">Tỉnh / Thành:</label>
                        <select name="city" id="city" required>
                            <option value="Other">Other
                            <option value="An Giang">An Giang
                                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                <option value="Bắc Giang">Bắc Giang
                                <option value="Bắc Kạn">Bắc Kạn
                                <option value="Bạc Liêu">Bạc Liêu
                                <option value="Bắc Ninh">Bắc Ninh
                                <option value="Bến Tre">Bến Tre
                                <option value="Bình Định">Bình Định
                                <option value="Bình Dương">Bình Dương
                                <option value="Bình Phước">Bình Phước
                                <option value="Bình Thuận">Bình Thuận
                                <option value="Bình Thuận">Bình Thuận
                                <option value="Cà Mau">Cà Mau
                                <option value="Cao Bằng">Cao Bằng
                                <option value="Đắk Lắk">Đắk Lắk
                                <option value="Đắk Nông">Đắk Nông
                                <option value="Điện Biên">Điện Biên
                                <option value="Đồng Nai">Đồng Nai
                                <option value="Đồng Tháp">Đồng Tháp
                                <option value="Đồng Tháp">Đồng Tháp
                                <option value="Gia Lai">Gia Lai
                                <option value="Hà Giang">Hà Giang
                                <option value="Hà Nam">Hà Nam
                                <option value="Hà Tĩnh">Hà Tĩnh
                                <option value="Hải Dương">Hải Dương
                                <option value="Hậu Giang">Hậu Giang
                                <option value="Hòa Bình">Hòa Bình
                                <option value="Hưng Yên">Hưng Yên
                                <option value="Khánh Hòa">Khánh Hòa
                                <option value="Kiên Giang">Kiên Giang
                                <option value="Kon Tum">Kon Tum
                                <option value="Lai Châu">Lai Châu
                                <option value="Lâm Đồng">Lâm Đồng
                                <option value="Lạng Sơn">Lạng Sơn
                                <option value="Lào Cai">Lào Cai
                                <option value="Long An">Long An
                                <option value="Nam Định">Nam Định
                                <option value="Nghệ An">Nghệ An
                                <option value="Ninh Bình">Ninh Bình
                                <option value="Ninh Thuận">Ninh Thuận
                                <option value="Phú Thọ">Phú Thọ
                                <option value="Quảng Bình">Quảng Bình
                                <option value="Quảng Bình">Quảng Bình
                                <option value="Quảng Ngãi">Quảng Ngãi
                                <option value="Quảng Ninh">Quảng Ninh
                                <option value="Quảng Trị">Quảng Trị
                                <option value="Sóc Trăng">Sóc Trăng
                                <option value="Sơn La">Sơn La
                                <option value="Tây Ninh">Tây Ninh
                                <option value="Thái Bình">Thái Bình
                                <option value="Thái Nguyên">Thái Nguyên
                                <option value="Thanh Hóa">Thanh Hóa
                                <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                <option value="Tiền Giang">Tiền Giang
                                <option value="Trà Vinh">Trà Vinh
                                <option value="Tuyên Quang">Tuyên Quang
                                <option value="Vĩnh Long">Vĩnh Long
                                <option value="Vĩnh Phúc">Vĩnh Phúc
                                <option value="Yên Bái">Yên Bái
                                <option value="Phú Yên">Phú Yên
                                <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                <option value="Tp.Hà Nội">Tp.Hà Nội
                                <option value="TP  HCM">TP HCM
                                </select>
                    </div>

                    <div class="form-grounp">
                        <label for="checkbox">Sở Thích:</label>
                        <a >Thể thao </a><input type="checkbox" name="thethao" id="checkbox" class="form-check-label" value="Thể thao">
                        <a >Nghe nhạc </a><input type="checkbox" name="nghenhac" id="checkbox" class="form-check-label" value="Nghe nhạc">
                        <a >Mua sắm </a><input type="checkbox" name="muasam" id="checkbox" class="form-check-label" value="Mua sắm">
                        <a >Du lịch </a><input type="checkbox" name="dulich" id="checkbox" class="form-check-label" value="Du lịch">
                    </div>

                    <div class="form-group">
                       <p> <label for="address">Giới thiệu bản thân</label></p>
                       <textarea name="gtbt" id="" cols="82" rows=""></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                       <input type="text" name="address" id="address" 
                       class="form-control">
                    </div>
                    
                    <input type="submit" value="Đăng kí" onclick="sb()" name="btn-reg"
                    class="btn-primary btn btn-block">
              </form>
            </div>
        </div>

    </div>
</body>
</html>