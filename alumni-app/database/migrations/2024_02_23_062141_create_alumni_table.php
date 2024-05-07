<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->unsignedInteger('batch');
            $table->string('department');
            $table->text('address');
            $table->string('current_designation');
            $table->string('employer_name');
            $table->string('work_location');
            $table->string('domain');
            $table->unsignedInteger('experience_years');
            $table->string('highest_degree');
            $table->enum('present_status', ['completed', 'pursuing']);
            $table->string('university');
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
        Schema::dropIfExists('alumni');
    }
};
