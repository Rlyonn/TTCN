<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $table = 'hoa_dons';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'maHD';
    protected $fillable = ['maHD', 'maKH', 'ngayThanhToan', 'SDT', 'email'];

    public static function generateMaHD()
    {
        $last = HoaDon::query()->orderBy('maHD', 'desc')->first();
        if ($last) {
            $lastCode = $last->maHD;
            $codeNumber = (int)substr($lastCode, 2) + 1;
        } else {
            $codeNumber = 1;
        }
    }
    public function getTenKH(){
        return $this->belongsTo(KhachHang::class, 'maKH', 'maKH');
    }
}