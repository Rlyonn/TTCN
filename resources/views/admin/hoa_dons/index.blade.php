@extends('layouts.master')
@section('content')
@include('layouts.notifySuccess')
    <div class="mb-2 flex">        
        <div class="ml-4 mr-2">
            <form action="" method="GET" class="flex items-center space-x-4">
                <label for="search_by" class="font-bold">Tìm kiếm theo:</label>
                <select name="search_by" id="search_by" class="p-2 border rounded">
                    <option value="maHD" @if($column == 'maHD') selected @endif>Mã Hóa đơn</option>
                    <option value="maKH" @if($column == 'maKH') selected @endif>Mã khách hàng</option>
                </select>
                <input type="text" name="keywords" value="{{ $keywords }}" placeholder="Nhập từ khóa" class="p-2 border rounded">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded duration-300 ease-in-out cursor-pointer">
                    Tìm kiếm
                </button>
            </form>
        </div>
        <a href="{{ route('hoa_dons.index') }}" class="mr-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer duration-300 ease-in-out">
            Reset
        </a> 
    </div>
    <div class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
            <h6 class="font-bold text-xl">Hóa Đơn</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                    <tr>
                        <th data-column="maHD" data-order="{{ $order }}" class="sortable-column cursor-pointer px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Mã HD </th>
                        <th data-column="tenKH" data-order="{{ $order }}" class="sortable-column cursor-pointer px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b
                        border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Tên khách hàng</th>
                        <th data-column="SDT" data-order="{{ $order }}" class="sortable-column cursor-pointer px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b
                        border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">SDT</th>
                        <th data-column="ngayThanhToan" data-order="{{ $order }}" class="sortable-column cursor-pointer px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b
                        border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Ngày thanh toán</th>
                        <th data-column="email" data-order="{{ $order }}" class="sortable-column cursor-pointer px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b
                        border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Email</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b
                        border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">CHỨC NĂNG</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hoa_dons as $hd)
                    <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 ml-4 font-semibold leading-tight text-x1">{{ $hd->maHD }}</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-x1">{{ $hd->getTenKH->hoTenKH }}</p>
                        </td>                
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-x1">{{ $hd->SDT }}</p>
                        </td>                        
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-x1">{{ $hd->ngayThanhToan }}</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-x1">{{ $hd->email }}</p>
                        </td> 
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"> 
                            <a href="{{ route('hoa_dons.show', $hd->maHD) }}" type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500"> 
                                <svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5"/>
                                </svg>
                            </a>                            
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-2 px-2">
                    {{ $hoa_dons->links() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Lấy danh sách các cột có thể sắp xếp
            const sortableColumns = document.querySelectorAll('.sortable-column');

            // Đặt sự kiện click cho mỗi cột
            sortableColumns.forEach(column => {
                column.addEventListener('click', function () {
                    const columnType = this.dataset.column;
                    const currentOrder = this.dataset.order;
                    const newOrder = currentOrder === 'asc' ? 'desc' : 'asc';

                    // Chuyển đến trang index với tham số sắp xếp
                    window.location.href = `{{ route('hoa_dons.index') }}?sort_by=${columnType}&order=${newOrder}`;
                });
            });

            //xử lý nút xóa
            const deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const maHD = this.getAttribute('data-service-id');

                    Swal.fire({
                        title: 'Xác nhận xóa dịch vụ',
                        html: `Bạn có chắc chắn muốn xóa dịch vụ này không?`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Xóa',
                        cancelButtonText: 'Hủy',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const deleteForm = document.getElementById('deleteForm' + maHD);
                            deleteForm.submit();
                        }
                    });
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
@endsection
