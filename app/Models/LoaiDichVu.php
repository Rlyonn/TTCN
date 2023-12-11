<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class LoaiDichVu extends Model
{
    use HasFactory;
    protected $primaryKey = 'maLoaiDV';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'maLoaiDV',
        'tenLoai',
    ];

}
