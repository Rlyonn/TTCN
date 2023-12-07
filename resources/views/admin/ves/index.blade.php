@extends('layouts.master')
@section('content')
    @include('layouts.notifySuccess')
    <div class="mb-2 flex">
        <a href="{{ route('ves.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer duration-300 ease-in-out">
            Thêm
        </a>
        <div class="ml-4 mr-2">
            <form action="" method="GET" class="flex items-center space-x-4">
                <label for="search_by" class="font-bold">Tìm kiếm theo:</label>
                <select name="search_by" id="search_by" class="p-2 border rounded">
                    <option value="maVe" @if($column == 'maVe') selected @endif>Mã vé</option>
                    <option value="giaTien" @if($column == 'giaTien') selected @endif>Giá Tiền</option>
                    <option value="loaiVe" @if($column == 'loaiVe') selected @endif>Loại Vé</option>
                </select>
                <input type="text" name="keywords" value="{{ $keywords }}" placeholder="Nhập từ khóa" class="p-2 border rounded">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded duration-300 ease-in-out cursor-pointer">
                    Tìm kiếm
                </button>
            </form>
        </div>
        <a href="{{ route('ves.index') }}" class="mr-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer duration-300 ease-in-out">
            Reset
        </a>        
    </div>
    <div class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
            <h6 class="font-bold text-xl">Vé</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                    <tr>
                        <th data-column="maVe" data-order="{{ $order }}" class="sortable-column cursor-pointer px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b
                        border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Mã Vé</th>
                        <th data-column="tenDV" data-order="{{ $order }}" class="sortable-column cursor-pointer px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b
                        border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Tên Dịch Vụ</th>
                        <th data-column="loaiVe" data-order="{{ $order }}" class="sortable-column cursor-pointer px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b
                        border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Loại vé</th>
                        <th data-column="giaTien" data-order="{{ $order }}" class="sortable-column cursor-pointer px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none
                        text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Giá vé</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b
                        border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">CHỨC NĂNG</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ves as $ve)
                    <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 ml-4 font-semibold leading-tight text-x1">{{ $ve->maVe }}</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-x1">{{ $ve->getTenDichVu->tenDV }}</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-x1">{{ $ve->loaiVe == 0 ? 'Trẻ Em' : 'Người Lớn' }}</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-x1 giaTien">{{ $ve->giaTien }}</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <form class="inline-block mr-1" action="{{ route('ves.destroy', $ve->maVe) }}" method="post" id="deleteForm{{$ve->maVe}}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500 delete-btn" data-ticket-id="{{ $ve->maVe }}">
                                    <svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20" data-ticket-id="{{ $ve->maVe }}">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                                    </svg>
                                </button>
                            </form>
                            <a href="{{ route('ves.edit', $ve->maVe) }}" type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500"> 
                                <svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                                    <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-2 px-2">
                    {{ $ves->links() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Bắt sự kiện khi trang được tải
            $('.giaTien').each(function() {
                formatCurrency($(this));
            });

            // Hàm format số thành định dạng tiền tệ Việt Nam
            function formatCurrency(inputElement) {
                // Lấy giá trị từ phần tử HTML
                let originalValue = inputElement.text().trim();

                // Chuyển đổi giá trị thành số
                let numericValue = parseFloat(originalValue.replace(/[^0-9]/g, ''));

                // Kiểm tra xem giá trị có phải là một số hợp lệ không
                if (!isNaN(numericValue)) {
                    // Định dạng số thành tiền tệ Việt Nam
                    let formattedValue = numericValue.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });

                    // Hiển thị giá trị đã định dạng trong phần tử HTML
                    inputElement.text(formattedValue);
                }
            }
        });

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
                window.location.href = `{{ route('ves.index') }}?sort_by=${columnType}&order=${newOrder}`;
            });
        });

        //xử lý nút xóa
        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const maVe = this.getAttribute('data-ticket-id');

                Swal.fire({
                    title: 'Xác nhận xóa vé',
                    html: `Bạn có chắc chắn muốn xóa vé này không?`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Xóa',
                    cancelButtonText: 'Hủy',
                }).then((result) => {
                    if (result.isConfirmed) {
                        const deleteForm = document.getElementById('deleteForm' + maVe);
                        deleteForm.submit();
                    }
                });
            });
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
