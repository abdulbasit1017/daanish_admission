<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Add the fields you want to allow mass assignment for
    protected $fillable = [
        'student_name',
        'father_name',
        'dob',
        'age',
        'year',
        'tehsil',
        'district',
        'address',
        'father_profession',
        'mother_name',
        'guardian_name',
        'father_id',
        'mother_id',
        'guardian_id',
        'father_income',
        'mother_income',
        'guardian_income',
        'father_qualification',
        'mother_qualification',
        'guardian_qualification',
        'present_class',
        'previous_school',
        'dob_school',
        'principal_name',
        'school_contact',
        'relative1_name',
        'relative1_relation',
        'relative1_phone',
        'relative2_name',
        'relative2_relation',
        'relative2_phone',
        'thumb_impression',
        'signature_parent',
        'signature_student',
        'date',
        'payment'
    ];

    // You can also use $guarded instead of $fillable if needed
    // protected $guarded = ['id'];
}
