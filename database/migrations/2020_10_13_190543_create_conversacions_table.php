<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('de')->references('id')->on('users');
            $table->foreingId('para')->references('id')->on('users');
            $table->text('ultimo_mensaje');
            $table->dateTime('fecha_ultimo_mensaje',0);
            $table->boolean('notificaciones')->default(true);
            $table->boolean('bloqueado')->default(false);
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
        Schema::dropIfExists('conversacions');
    }
}
