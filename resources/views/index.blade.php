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
                <h6 class="font-bold text-[23px]">CHAMPA ISLAND NHA TRANG - RESORT HOTEL & SPA</h6>
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

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 gap-y-6 mt-4">
    <a href="#">
        <img class="rounded-t-lg" src="/storage/images/gioithieu.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Bắn cung và chèo sup</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Chèo thuyền SUP và Bắn cung là một trong những dịch vụ giải trí mới tại Resort đang được đông đảo du khách và giới trẻ đón nhận vì giúp giải tỏa căng thẳng, nâng cao tính kiên nhẫn cũng như kỹ năng quan sát và tập trung của người chơi.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

</div>
@include('layouts.footer')
</body>
</html>
