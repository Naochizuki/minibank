<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('rekening', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_nasabah');
            $table->string('no_rekening');
            $table->bigInteger('saldo');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->timestamps();

            $table->foreign('id_nasabah')->references('id')->on('nasabah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('rkeening');
    }
};
