<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_details', function (Blueprint $table) {
            $table->unsignedBigInteger("skill_id");
            $table->foreign("skill_id")->references("skill_id")->on("skills")->onUpdate('cascade')->onDelete('cascade');;
            $table->string("name");
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
        Schema::dropIfExists('skills_details');
    }
}
