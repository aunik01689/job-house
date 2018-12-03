<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobpostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobpost', function (Blueprint $table) {
            $table->increments('jobpost_id');
            $table->integer('company_id');
            $table->string('jobpost_title');
            $table->string('jobpost_description');
            $table->string('jobpost_salary');
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
        Schema::dropIfExists('jobpost');
    }
}
