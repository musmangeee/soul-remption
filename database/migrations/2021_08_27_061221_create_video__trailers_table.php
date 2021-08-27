<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoTrailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video__trailers', function (Blueprint $table) {
            $table->id();
            $table->string('video')->nullable();
            $table->string('trailer')->nullable();
            $table->string('video_poster')->nullable();
            $table->string('trailer_poster')->nullable();
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
        Schema::dropIfExists('video__trailers');
    }
}
