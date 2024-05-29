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
            $table->id();
            $table->string('LeaveType', 110)->nullable();
            $table->string('ToDate', 120)->nullable();
            $table->string('FromDate', 120)->nullable();
            $table->mediumText('Description')->nullable();
            $table->timestamp('PostingDate')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->mediumText('AdminRemark')->nullable();
            $table->string('AdminRemarkDate', 120)->nullable();
            $table->integer('Status')->nullable();
            $table->integer('IsRead')->nullable();
            $table->foreignId('empid')->constrained('tblemployees')->onDelete('cascade');
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
        Schema::dropIfExists('tblleaves');
    }
};
