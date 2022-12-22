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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->timestamps();
            $table->string('template')->default(1);
            $table->string('portfolio')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable();
            $table->string('background')->nullable();
            $table->date('ttl')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('sd')->nullable();
            $table->string('smp')->nullable();
            $table->string('sma')->nullable();
            $table->string('wa')->nullable();
            $table->string('email')->nullable();
            $table->string('ig')->nullable();
            $table->string('twitter')->nullable();
            $table->integer('exp')->nullable();
            $table->integer('client')->nullable();
            $table->integer('study')->nullable();
            $table->integer('project')->nullable();
            $table->integer('certificate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portofolios');
    }
};
