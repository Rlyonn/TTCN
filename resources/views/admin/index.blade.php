@extends('layouts.master')
@section('content')
<!-- component -->
<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</head>
<body>
    @php
        $totalUser = \App\Models\KhachHang::count();
        $totalDV = \App\Models\DichVu::count();
        $totalOrder = \App\Models\HoaDon::count();
        $totalVe = \App\Models\Ve::count();
    @endphp
    <div class="container px-6 py-2 mx-auto">
        <div class="container px-6 py-8 mx-auto">
            <h3 class="text-3xl font-medium text-gray-700">THÔNG TIN NHANH</h3>
            <div class="mt-4 flex flex-wrap -mx-6">
                <!-- Hiển thị số liệu cho User -->
                    <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-6">
                        <a href="{{ route('khach_hangs.index') }}">
                        <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-md">
                            <div class="p-3 bg-indigo-600 bg-opacity-75 rounded-full my-4">
                                <i class="fas fa-user text-white"></i>
                            </div>
    
                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">{{ $totalUser }}</h4>
                                <div class="text-gray-500"><b>KHÁCH HÀNG</b></div>
                            </div>
                        </div>
                        </a>
                    </div>
                <!-- Hiển thị số liệu cho Service -->
                    <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-6">
                        <a href="{{ route('dich_vus.index') }}">
                        <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-md">
                            <div class="p-3 bg-orange-600 bg-opacity-75 rounded-full my-4">
                                <i class="fas fa-star text-white"></i>
                            </div>
    
                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">{{ $totalDV }}</h4>
                                <div class="text-gray-500"><b>DỊCH VỤ</b></div>
                            </div>
                        </div>
                        </a>
                    </div>
                <!-- Hiển thị số liệu cho Order -->
                    <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-6">
                        <a href="{{ route('hoa_dons.index') }}">
                        <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-md">
                            <div class="p-3 bg-pink-600 bg-opacity-75 rounded-full my-4">
                                <i class="fas fa-shopping-cart text-white"></i>
                            </div>
    
                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">{{ $totalOrder }}</h4>
                                <div class="text-gray-500"><b>ĐƠN HÀNG</b></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-0">
                        <a href="{{ route('ves.index') }}">
                        <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-md">
                            <div class="p-3 bg-yellow-600 bg-opacity-75 rounded-full my-4">
                                <i class="fas fa-ticket-alt text-white"></i>
                            </div>
    
                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">{{ $totalVe }}</h4>
                                <div class="text-gray-500"><b>VÉ</b></div>
                            </div>
                        </div>
                        </a>
                    </div>
            </div>
        </div>
    </div>
<div class="flex flex-col h-screen bg-gray-100">
    <!-- Contenido principal -->
    <div class="flex-1 flex flex-wrap">

        <!-- Área de contenido principal -->
        <div class="flex-1 p-4 w-full md:w-1/2">

                 <!-- Contenedor de Gráficas -->
            <div class="mt-8 flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                <!-- Primer contenedor -->
                <!-- Sección 1 - Gráfica de Người dùng -->
                <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">
                    <h2 class="text-gray-500 text-lg font-semibold pb-1">Người dùng</h2>
                    <div class="my-1"></div> <!-- Espacio de separación -->
                    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                    <div class="chart-container" style="position: relative; height:150px; width:100%">
                        <!-- El canvas para la gráfica -->
                        <canvas id="usersChart"></canvas>
                    </div>
                </div>

                <!-- Segundo contenedor -->
                <!-- Sección 2 - Gráfica de Doanh thu từ khách hàng từ khách hàng-->
                <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">
                    <h2 class="text-gray-500 text-lg font-semibold pb-1">Doanh thu</h2>
                    <div class="my-1"></div> <!-- Espacio de separación -->
                    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                    <div class="chart-container" style="position: relative; height:150px; width:100%">
                        <!-- El canvas para la gráfica -->
                        <canvas id="commercesChart"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Script para las gráficas -->
<script>
    // Gráfica de Người dùng
    var usersChart = new Chart(document.getElementById('usersChart'), {
        type: 'doughnut',
        data: {
            labels: ['Mới', 'Đã đăng ký'],
            datasets: [{
                data: [30, 65],
                backgroundColor: ['#00F0FF', '#8B8B8D'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom' // Ubicar la leyenda debajo del círculo
            }
        }
    });

    // Gráfica de Doanh thu
    var commercesChart = new Chart(document.getElementById('commercesChart'), {
        type: 'doughnut',
        data: {
            labels: ['Mới', 'Hôm trước'],
            datasets: [{
                data: [60, 40],
                backgroundColor: ['#FEC500', '#8B8B8D'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom' // Ubicar la leyenda debajo del círculo
            }
        }
    });

    // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
    const menuBtn = document.getElementById('menuBtn');
    const sideNav = document.getElementById('sideNav');

    menuBtn.addEventListener('click', () => {
        sideNav.classList.toggle('hidden'); // Agrega o quita la clase 'hidden' para mostrar u ocultar la navegación lateral
    });
</script>
</body>
</html>
@endsection
