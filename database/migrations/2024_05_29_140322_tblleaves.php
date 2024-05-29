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
        Schema::create('tblleaves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LeaveType', 110)->nullable();
            $table->string('ToDate', 120)->nullable();
            $table->string('FromDate', 120)->nullable();
            $table->mediumText('Description')->nullable();
            $table->timestamp('PostingDate')->useCurrent();
            $table->mediumText('AdminRemark')->nullable();
            $table->string('AdminRemarkDate', 120)->nullable();
            $table->tinyInteger('Status')->nullable();
            $table->tinyInteger('IsRead')->nullable();
            $table->integer('empid')->unsigned()->nullable();
            $table->foreign('empid')->references('id')->on('tblemployees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblleaves');
    }
};
