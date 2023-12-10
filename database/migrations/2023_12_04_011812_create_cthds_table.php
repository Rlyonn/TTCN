<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('cthds', function (Blueprint $table) {
            $table->unsignedBigInteger('maVe');
            $table->unsignedBigInteger('maHD');
            $table->float('soLuong');
            $table->string('giaTien');
            
            $table->foreign('maVe')->references('maVe')->on('ves');
            $table->foreign('maHD')->references('maHD')->on('hoa_dons');
            
            $table->timestamps();
        });
        
        
    }

    public function down()
    {
        Schema::dropIfExists('cthds');
    }
};
