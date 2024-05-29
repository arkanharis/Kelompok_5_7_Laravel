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
        Schema::create('tblleavetype', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LeaveType', 200)->nullable();
            $table->mediumText('Description')->nullable();
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
        Schema::dropIfExists('tblleavetype');
    }
};
