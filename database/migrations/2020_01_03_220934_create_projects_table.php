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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('identification')->nullable();
            $table->date('initial_date')->nullable();
            $table->date('final_date')->nullable();
            $table->string('advance')->nullable();

            $table->unsignedInteger('type_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('university_id')->nullable();
            

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
