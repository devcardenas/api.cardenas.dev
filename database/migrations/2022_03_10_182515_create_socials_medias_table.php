<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials_medias', function (Blueprint $table) {
            $table->id("social_media_id");
            $table->unsignedBigInteger("profile_id");
            $table->foreign("profile_id")->references("profile_id")->on("profiles")->onUpdate('cascade')->onDelete('cascade');
            $table->string("name");
            $table->string("url")->nullable();
            $table->string("icon")->nullable();
            $table->integer("status");
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
        Schema::dropIfExists('socials_medias');
    }
}
