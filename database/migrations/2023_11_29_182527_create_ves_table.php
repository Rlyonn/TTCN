<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ves', function (Blueprint $table) {
            $table->id('maVe');            
            $table->boolean('loaiVe');
            $table->decimal('giaTien',  $precision = 13, $scale = 0);
            $table->unsignedBigInteger('maDV');
            $table->foreign('maDV')->references('maDV')->on('dich_vus');            
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ves');
    }
};
