<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Trang Chủ</title>
</head>
<body>
@include('layouts.nav')

<div class="bg-cover h-[900px] bg-[url('https://theme.hstatic.net/1000067077/1000396284/14/slideshow_1_master.jpg?v=1801')]">
    <div class="ml-8 text-white pt-16">
        <h1 class="text-[50px] text-bold">CHAMPA ISLAND</h1>
        <h2 class="text-[35px]">ISLAND IN THE HEART OF THE CITY</h2>
        <p class="text-[25px]">
            WHERE THE RIVER MEETS THE SEA
        </p>
    </div>
</div>
<div class="container mx-auto flex mt-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="w-[550px] h-[580px] bg-cover bg-[url('/storage/images/gioithieu.jpg')] shadow-md rounded-md"></div>
        <div class="">
            <div class="border-l-4 border-blue-500 pl-6">
                <h6 class="text-blue-500 font-bold text-[20px]">Về chúng tôi</h6>
                <h6 class="font-bold text-[25px]">KHU DU LỊCH NGHỈ DƯỠNG NẰM GIỮA LÒNG THÀNH PHỐ</h6>
            </div>
            <div class="font-bold text-[20px] mt-6">
                <span>Được mệnh danh là hòn đảo giữa lòng thành phố Nha Trang, Champa Island Nha Trang - Resort Hotel & Spa sở hữu những công trình kiến ​​trúc Chăm sang trọng, độc đáo và hấp dẫn nhất.</span>
            </div>
            <div class="bg-[#F8F9FA] p-4 shadow-md rounded-md mt-6">
                <div class="text-blue-500 text-center text-lg font-sm">
                    <span>GIỚI THIỆU</span>
                </div>
                <div class="mt-2">
                    <span>Tại đây, chúng tôi cung cấp đầy đủ các dịch vụ như lưu trú, ăn uống, giải trí, hội nghị, MICE, bãi biển riêng, v.v. sẽ làm hài lòng hoàn toàn du khách. 
                  
                        Với hình dáng hai con tàu lớn hướng ra biển khơi, Khu nghỉ dưỡng tập trung vào các dịch vụ nghỉ dưỡng cao cấp với hệ thống căn hộ khách sạn hiện đại được thiết kế từ 1 đến 3 phòng ngủ cùng chuỗi biệt thự sang trọng riêng biệt. Ngoài ra, Champa Island còn có nhà hàng hải sản tươi sống, sân chơi trẻ em, sân thể thao ngoài trời, sân tập golf, quán cà phê ven sông, khu bắn cung độc đáo, khu vực SUP (Stand-Up Paddleboarding) và các địa điểm tổ chức sự kiện. Khu thủ công truyền thống ấn tượng với một số sản phẩm thủ công Việt Nam cùng với Phố đi bộ Chandra với rạp chiếu phim ngoài trời, ẩm thực đường phố và các hoạt động ngoài trời sẽ làm hài lòng du khách. 
                    </div>
            </div>
        </div>
    </div>
</div>
<div id="dichVu" class="mt-6 p-12">
    <div class="border-l-4 border-blue-500 pl-6">
        <h6 class="text-blue-500 font-bold text-[20px]">DỊCH VỤ</h6>
        <h6 class="font-bold text-[25px]">DỊCH VỤ DÀNH CHO BẠN</h6>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-6 mt-4">
        
            <div class="w-[450px] shadow-md rounded-lg overflow-hidden">
                <div class="h-[250px]">
                    <img class="h-[250px] w-full" src="/storage/images/service_pic/" alt="">
                </div>
                <div class="text-center">
                    <p class="font-bold text-lg mt-2"></p>
                    <a href="" class="mb-4 duration-300 inline-flex items-center text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-2.5 mt-2">
                        Xem Chi Tiết
                    </a>
                </div>
            </div>
        
    </div>
</div>
@include('layouts.footer')
</body>
</html>
