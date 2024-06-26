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
        Schema::create('paslons', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('calon_role');
            $table->string('foto');
            $table->text('deskripsi');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('nomor_hp');
            $table->string('alamat');
            $table->string('degree');
            $table->string('email');
            $table->string('agama');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('skype');
            $table->string('linkedin');
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
        Schema::dropIfExists('paslons');
    }
};
