<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->double('precio',8,2);
            $table->double('cantidad');
            $table->text('descripcion');
            $table->string('tipo');
            $table->foreignId('brand_id');
            $table->string('status');
            $table->string('img1', 255);
            $table->string('img2', 255);
            $table->string('img3', 255);
            $table->timestamps();


            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
