<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostEtiquetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiqueta_post', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('post_id')->unsigned();
            $table->unsignedBigInteger('etiqueta_id')->unsigned();

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('etiqueta_id')->references('id')->on('etiquetas')->onDelete('cascade');

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
        Schema::dropIfExists('post_etiqueta');
    }
}
