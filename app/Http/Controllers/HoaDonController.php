<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\KhachHang;
use App\Http\Requests\HoaDon\StoreHoaDonRequest;
use App\Http\Requests\HoaDon\UpdateHoaDonRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HoaDonController extends Controller
{
    public function index(Request $request)
    {
        $searchColumns = [
            'maHD' => 'like',
            'hoTenKH' => 'like',            
        ];
        $column = $request->get('search_by');
        $keywords = $request->get('keywords');
        $lastKeyword = $keywords;
        $query = HoaDon::query();
        $query->leftJoin('khach_hangs', 'hoa_dons.maKH', '=', 'khach_hangs.maKH')
              ->select('hoa_dons.*', 'khach_hangs.hoTenKH');

        if (array_key_exists($column, $searchColumns)) {
            $operator = $searchColumns[$column];
            if (!empty($keywords)) {
                if ($operator === 'like') {
                    $keywords = '%' . $keywords . '%';
                }
                $query->where($column, $operator, $keywords);
            }
        }

        //sắp xếp
        $sortableColumns = ['maHD', 'maKH', 'ngayThanhToan', 'SDT', 'email'];
        $defaultColumn = 'maHD'; // Cột mặc định
        $defaultOrder = 'asc'; // Thứ tự mặc định

        $column = $request->get('sort_by', $defaultColumn);
        $order = $request->get('order', $defaultOrder);

        if (!in_array($column, $sortableColumns)) {
            $column = $defaultColumn;
        }

        $data = $query->orderBy($column, $order)->paginate(7);
        // Thêm tham số sắp xếp vào URL paginate
        $data->appends(['sort_by' => $column, 'order' => $order]);

        return view('admin.hoa_dons.index' , [
            'hoa_dons' => $data,
            'keywords' => $lastKeyword,
            'column' => $column,
            'order' => $order,
        ]);
    }
    public function homeIndex() {
        $data = HoaDon::query()->paginate(9);
        return view('index', [
            'hoa_dons' => $data,
        ]);
    }

    public function create()
    {
        
    }

    public function store(StoreHoaDonRequest $request)
    {
        //
    }

    
    public function show(HoaDon $hoaDon)
    {
        //$table = HoaDon::where('maHD', $hoaDon)->first();
        return view('admin.cthd.show', [
            'maHD' => $hoaDon,
        ]);
    }


    public function edit(HoaDon $hoaDon)
    {
        //
    }

    public function update(UpdateHoaDonRequest $request, HoaDon $hoaDon)
    {
        //
    }


    public function destroy(HoaDon $hoaDon)
    {
        //
    }
}
