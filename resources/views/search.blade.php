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
    <title>Search Page</title>
</head>
<body>
@include('layouts.nav')

<div class="container mx-auto mt-6">
    <div class="grid grid-cols-2">
        <div class="border-l-4 border-blue-500 pl-6">
            <h6 class="text-blue-500 font-bold text-[20px]">DỊCH VỤ</h6>
            <h6 class="font-bold text-[25px]">DỊCH VỤ DÀNH CHO BẠN</h6>
        </div>
    
        <div>
            <form action="{{ route('search') }}" method="get" class="flex items-center space-x-4">
                <div class="flex-grow">
                    <div class="flex space-x-4"> 
                        <input class="flex-grow w-36 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" type="search" placeholder="Tìm kiếm" aria-label="Search" name="timKiem">
                        <button class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none text-white font-bold px-4 py-2 rounded-md" type="submit">Tìm kiếm</button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>

<div id="searchResults" class="mt-6 p-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-6 mt-4">
        @foreach($searchResults as $result)
        <div class="p-5 text-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray- dark:border-gray-700">
            <a href="{{ route('show', $result->maDV) }}">
                <img class="rounded-t-lg" src="/storage/images/service_pic/{{$result->maDV}}/{{$result->anh}}" alt="" />
            </a>
            <a href="{{ route('show', $result->maDV) }}">
                <h5 class="p-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $result->tenDV }}</h5>
            </a>
            <a href="{{ route('show', $result->maDV) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Xem chi tiết
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            
        </div>
        @endforeach
    </div>
    
    <div class="mt-6 px-2 flex justify-center items-center">
        {!! $searchResults->appends(['timKiem' => request('timKiem')])->links('layouts.pagination') !!}
    </div>
</div>


</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const pageParam = urlParams.get('page');
        if (pageParam && parseInt(pageParam) >= 1) {
            window.location.hash = 'searchResults';
            document.getElementById('searchResults').scrollIntoView();
        }
    });
</script>
</html>
