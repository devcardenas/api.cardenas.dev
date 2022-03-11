<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id("project_id");
            $table->unsignedBigInteger("profile_id");
            $table->foreign("profile_id")->references("profile_id")->on("profiles")->onUpdate('cascade')->onDelete('cascade');;
            $table->unsignedBigInteger("project_type_id");
            $table->foreign("project_type_id")->references("project_type_id")->on("projects_types")->onUpdate('cascade')->onDelete('restrict');
            $table->string("title");
            $table->string("description");
            $table->string("slogan")->nullable();
            $table->string("url")->nullable();
            $table->string("icons")->nullable();
            $table->string("technologies")->nullable();
            $table->string("image_path")->nullable();
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
        Schema::dropIfExists('projects');
    }
}
