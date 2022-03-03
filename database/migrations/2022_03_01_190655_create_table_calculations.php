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
        Schema::create('calculations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('general_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->tinyInteger('quantity');
            $table->decimal('unit_price');
            $table->decimal('sum');

            $table->foreign('general_id')->references('id')->on('generals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calculations');
    }
};
