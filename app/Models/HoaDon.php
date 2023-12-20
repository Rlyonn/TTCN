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

    public function getTenKH(){
        return $this->belongsTo(KhachHang::class, 'maKH', 'maKH');
    }
    public function getMaHD(){
        return $this-> maHD;
    }
    
}