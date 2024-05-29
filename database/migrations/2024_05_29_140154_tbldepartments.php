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
        Schema::create('tbldepartments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DepartmentName', 150)->nullable();
            $table->string('DepartmentShortName', 100)->nullable();
            $table->string('DepartmentCode', 50)->nullable();
            $table->timestamp('CreationDate')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbldepartments');
    }
};
