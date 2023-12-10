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
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id('maHD');
            $table->dateTime('ngayThanhToan');
            $table->string('SDT', 20)->nullable();
            $table->string('email', 255);
            $table->unsignedBigInteger('maKH');
            $table->foreign('maKH')->references('maKH')->on('khach_hangs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
