<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoihienmauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoihienmau', function (Blueprint $table) {
            $table->increments('Id',true);
            $table->string('Id_2');
            $table->string('HoTen');
            $table->Date('NgaySinh');
            $table->string('NgheNghiep');
            $table->string('NoiLamviec');
            $table->string('SDT');
            $table->string('DiaChi');
            $table->integer('SoLanHien');
            $table->string('Nhom_ABO');
            $table->string('Nhom_Rh');
            $table->integer('Nguon_Goc_Import')->default(0);
            $table->Date('Muc_5')->nullable();
            $table->Date('Muc_10')->nullable();
            $table->Date('Muc_15')->nullable();
            $table->Date('Muc_20')->nullable();
            $table->Date('Muc_30')->nullable();
            $table->Date('Muc_40')->nullable();
            $table->Date('Muc_50')->nullable();
            $table->Date('Muc_60')->nullable();
            $table->Date('Muc_70')->nullable();
            $table->Date('Muc_80')->nullable();
            $table->Date('Muc_90')->nullable();
            $table->Date('Muc_100')->nullable();
            $table->integer('Muc_5_donvi')->nullable();
            $table->integer('Muc_10_donvi')->nullable();
            $table->integer('Muc_15_donvi')->nullable();
            $table->integer('Muc_20_donvi')->nullable();
            $table->integer('Muc_30_donvi')->nullable();
            $table->integer('Muc_40_donvi')->nullable();
            $table->integer('Muc_50_donvi')->nullable();
            $table->integer('Muc_60_donvi')->nullable();
            $table->integer('Muc_70_donvi')->nullable();
            $table->integer('Muc_80_donvi')->nullable();
            $table->integer('Muc_90_donvi')->nullable();
            $table->integer('Muc_100_donvi')->nullable();
            $table->integer('Xoa')->default(0);

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
        Schema::dropIfExists('nguoihienmau');
    }
}
