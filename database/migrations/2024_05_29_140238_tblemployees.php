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
        Schema::create('tblemployees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('EmpId', 100);
            $table->string('FirstName', 150)->nullable();
            $table->string('LastName', 150)->nullable();
            $table->string('EmailId', 200)->nullable();
            $table->string('Password', 180)->nullable();
            $table->string('Gender', 100)->nullable();
            $table->string('Dob', 100)->nullable();
            $table->string('Department', 255)->nullable();
            $table->string('Address', 255)->nullable();
            $table->string('City', 200)->nullable();
            $table->string('Country', 150)->nullable();
            $table->char('Phonenumber', 11)->nullable();
            $table->tinyInteger('Status')->nullable();
            $table->timestamp('RegDate')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblemployees');
    }
};
