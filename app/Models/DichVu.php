<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DichVu extends Model
{
    use HasFactory;
    protected $primaryKey = 'maDV';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'maDV',
        'tenDV',
        'moTa',
        'anh',
        'maLoaiDV',
        'xepLoai',
        'sdtDV',
        'diaChiDV',
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($dich_vu) {
                     
            $serviceID = $dich_vu->maDV;
            if (request()->hasFile('anh')) {
                $image = request()->file('anh');
                $image->storeAs("public/images/service_pic/$serviceID", $dich_vu->anh);
            } else {
                $sourcePath = 'public/images/service_pic/default.png';
                $destinationDirectory = "public/images/service_pic/$serviceID";
                $destinationPath = "$destinationDirectory/default.png";
                Storage::copy($sourcePath, $destinationPath);
            }
        });
        static::updating(function ($dich_vu){
            if (request()->hasFile('anh')) {
                $image = request()->file('anh');
                $dichVuID = $dich_vu['maDV'];
                $imageName = 'picture' . '.' . $image->getClientOriginalExtension();
                $image->storeAs("public/images/service_pic/$dichVuID", $imageName);
                $dich_vu['anh'] = $imageName;
            }
        });
    }

    public function getTenDV(){
        return $this->belongsTo(LoaiDichVu::class, 'maLoaiDV', 'maLoaiDV');
    }

}
