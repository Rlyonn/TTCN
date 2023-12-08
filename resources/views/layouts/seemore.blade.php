<div id="dichVu" class="mt-6 p-12">
    <div class="border-l-4 border-blue-500 pl-6">
        <h6 class="text-blue-500 font-bold text-[20px]">DỊCH VỤ</h6>
        <h6 class="font-bold text-[25px]">DỊCH VỤ DÀNH CHO BẠN</h6>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-6 mt-4">
        @foreach($dich_vus as $dich_vu)            
            <div class="p-5 text-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray- dark:border-gray-700">
                <a href="{{ route('show', $dich_vu->maDV) }}">
                    <img class="rounded-t-lg" src="/storage/images/service_pic/{{$dich_vu->maDV}}/{{$dich_vu->anh}}" alt="" />
                </a>
                <a href="{{ route('show', $dich_vu->maDV) }}">
                    <h5 class="p-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $dich_vu->tenDV }}</h5>
                </a>
                <a href="{{ route('show', $dich_vu->maDV) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Xem chi tiết
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                
            </div>
        @endforeach
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const pageParam = urlParams.get('page');
        if (pageParam && parseInt(pageParam) >= 1) {
            window.location.hash = 'dichVu';
            document.getElementById('dichVu').scrollIntoView();
        }
    });
</script>