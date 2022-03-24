<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaydaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paydays', function (Blueprint $table) {

            $table->string('organization')->nullable();
            $table->string('ref_id')->nullable();
            $table->string('employee_number')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->integer('payroll_id')->nullable();
            $table->string('job_location')->nullable();
            $table->string('department')->nullable();
            $table->string('job_title')->nullable();
            $table->string('grade')->nullable();
            $table->integer('step')->nullable();
            $table->date('hire_date')->nullable();
            $table->date('dete_of_birth')->nullable();
            $table->date('confirmation_date')->nullable();
            $table->date('date_of_present_appointment')->nullable();
            $table->string('file_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->integer('account_number')->nullable();
            $table->string('account_type')->nullable();
            $table->string('sort_code')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('home_mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('tax_state')->nullable();
            $table->string('state_of_origin')->nullable();
            $table->string('lga_of_origin')->nullable();
            $table->string('town_or_city')->nullable();
            $table->string('address')->nullable();
            $table->string('additional_information')->nullable();
            $table->string('pfa_name')->nullable();
            $table->string('pfa_pin')->nullable();
            $table->string('division')->nullable();
            $table->string('labour_union')->nullable();
            $table->string('status')->nullable();
            $table->date('effective_start_date')->nullable();
            $table->string('remarks')->nullable();
            $table->string('comments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paydays');
    }
}
