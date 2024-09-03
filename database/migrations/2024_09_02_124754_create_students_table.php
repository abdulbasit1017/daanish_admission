<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('father_name');
            $table->date('dob');
            $table->integer('age');
            $table->integer('year');
            $table->string('tehsil');
            $table->string('district');
            $table->text('address');
            $table->string('mother_name');
            $table->string('guardian_name');
            $table->string('father_id');
            $table->string('mother_id');
            $table->string('guardian_id');
            $table->string('father_profession');
            $table->decimal('father_income', 10, 2);
            $table->decimal('mother_income', 10, 2);
            $table->decimal('guardian_income', 10, 2);
            $table->string('father_qualification');
            $table->string('mother_qualification');
            $table->string('guardian_qualification');
            $table->string('present_class');
            $table->string('previous_school');
            $table->date('dob_school');
            $table->string('principal_name');
            $table->string('school_contact');
            $table->string('relative1_name');
            $table->string('relative1_relation');
            $table->string('relative1_phone');
            $table->string('relative2_name');
            $table->string('relative2_relation');
            $table->string('relative2_phone');
            $table->string('thumb_impression');
            $table->string('signature_parent');
            $table->string('signature_student');
            $table->date('date');
            $table->decimal('payment', 10, 2);
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
        Schema::dropIfExists('students');
    }
}
