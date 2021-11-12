<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiTonvinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_tonvinh', function (Blueprint $table) {
            $table->increments('Id',true);
            $table->integer('Id_excel')->nullable();
            $table->integer('Id_hienmau')->nullable();
            $table->integer('MucTonVinh')->nullable();
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
        Schema::dropIfExists('api_tonvinh');
    }
}
