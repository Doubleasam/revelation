<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadofdepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headofdepartments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('first_name')->nullable();
            $table->text('middle_name')->nullable();
            $table->text('last_name')->nullable();
            $table->enum('gender', ['male', 'female', 'unknown'])->default('unknown');
            $table->enum('marital_status', [
                'single',
                'engaged',
                'married',
                'divorced',
                'widowed',
                'separated',
                'unknown',
                'deceased'
            ])->default('unknown');
            $table->date('dob')->nullable();
            $table->text('departments')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->text('email')->nullable();
            $table->text('address')->nullable();
            $table->text('notes')->nullable();
            $table->text('photo')->nullable();
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
        Schema::dropIfExists('headofdepartments');
    }
}
