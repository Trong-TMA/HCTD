<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExceltonvinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exceltonvinh', function (Blueprint $table) {
            $table->increments('Id',true);
            $table->string('HoTen');
            $table->Date('NgaySinh');
            $table->string('SDT');
            $table->string('NgheNghiep');
            $table->string('DiaChi');
            $table->string('Nhom_ABO');
            $table->integer('MucTonVinh');
            $table->integer('MaVung')->nullable();
            $table->string('TenFile');
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exceltonvinh');
    }
}
