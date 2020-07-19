<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smonitors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client');
            $table->string('client_ip', 510);
            $table->string('clienr_referer', 510);
            $table->text('site');
            $table->string('date', 255);
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
        Schema::dropIfExists('smonitors');
    }
}
