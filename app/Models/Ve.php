<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Ve extends Model
{
    use HasFactory;
    protected $primaryKey = 'maVe';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'maVe',
        'maDV',
        'loaiVe',
        'giaTien',
    ];
    
    
    public function getTenDichVu()
    {
        return $this->belongsTo(DichVu::class, 'maDV', 'maDV');
    } 
}
