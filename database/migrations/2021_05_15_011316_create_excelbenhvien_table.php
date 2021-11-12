<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcelbenhvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excelbenhvien', function (Blueprint $table) {
            $table->increments('Id',true);
            $table->string('HoTen');
            $table->Date('NgaySinh');
            $table->string('NgheNghiep');
            $table->string('NoiLamviec');
            $table->string('SDT');
            $table->string('DiaChi');
            $table->integer('SoLanHien');
            $table->string('Nhom_ABO');
            $table->string('Nhom_Rh');
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
        Schema::dropIfExists('excelbenhvien');
    }
}
