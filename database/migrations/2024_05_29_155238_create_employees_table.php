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
            $table->id();
            $table->string('EmpId', 110)->nullable();
            $table->string('FirstName', 150)->nullable();
            $table->string('LastName', 150)->nullable();
            $table->string('EmailId', 120)->nullable();
            $table->string('Password', 150)->nullable();
            $table->string('Gender', 50)->nullable();
            $table->string('Dob', 120)->nullable();
            $table->string('Department', 150)->nullable();
            $table->mediumText('Address')->nullable();
            $table->string('City', 120)->nullable();
            $table->string('Country', 120)->nullable();
            $table->string('Phonenumber', 20)->nullable();
            $table->integer('Status')->nullable();
            $table->timestamp('RegDate')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('tblemployees');
    }
};
