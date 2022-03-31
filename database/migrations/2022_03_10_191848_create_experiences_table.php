<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id("experience_id");
            $table->unsignedBigInteger("profile_id");
            $table->foreign("profile_id")->references("profile_id")->on("profiles")->onUpdate('cascade')->onDelete('cascade');;
            $table->string("title");
            $table->string("company");
            $table->string("location")->nullable();
            $table->date("start_date")->nullable();
            $table->date("end_date")->nullable();
            $table->text("description")->nullable();
            $table->integer("status");
            $table->integer("current");
            $table->text("logo_company_url")->nullable();
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
        Schema::dropIfExists('experiences');
    }
}
