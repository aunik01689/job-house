<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker', function (Blueprint $table) {
            $table->increments('jobseeker_id');
            $table->string('jobseeker_name');
            $table->string('jobseeker_email');
            $table->string('jobseeker_password');
            $table->string('jobseeker_phone');
            $table->string('jobseeker_jobtype');
            $table->binary('jobseeker_cv');
            $table->binary('jobseeker_image');
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
        Schema::dropIfExists('jobseeker');
    }
}
