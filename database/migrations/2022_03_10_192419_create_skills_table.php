<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id("skill_id");
            $table->unsignedBigInteger("profile_id");
            $table->foreign("profile_id")->references("profile_id")->on("profiles")->onUpdate('cascade')->onDelete('cascade');;
            $table->string("name");
            $table->string("icon")->nullable();
            $table->string("list_type");
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
        Schema::dropIfExists('skills');
    }
}
