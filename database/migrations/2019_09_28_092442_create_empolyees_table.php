<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpolyeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empolyees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('empolyee_name');
            $table->integer('empolyee_id');
            $table->string('empolyee_designation');
            $table->integer('empolyee_number');
            $table->string('empolyee_email');
            $table->string('employee_photo')->default('defaultemployeephoto.jpg');
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
        Schema::dropIfExists('empolyees');
    }
}
