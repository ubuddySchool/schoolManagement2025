<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterConfiguration extends Model
{
    use HasFactory;

    protected $table = 'masterconfiguration';

    protected $fillable = [
        'school_id',
        'session_id',
        'assign_module',
        'assign_class',
        'assign_section',
        'assign_subject_to_school',
        'assign_subject_to_class',
        'assign_subject_type',
        'assign_subject_to_module',
        'assign_term_to_school',
        'assign_term_to_class',
        'session',
        'student_form',
        'staff_form',
        'student_enquiry',
        'staff_enquiry',
        'assign_houses',
        'staff_attendance',
        'student_attendance',
        'admit_card_layout',
        'assgin_grade',
        'assgin_result_type',
        'marking_pattern',
        'assgin_layout',
        'annual_calender',
        'certificate',
    ];

    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }

    public function session()
    {
        return $this->belongsTo(Schoolsession::class, 'session_id');
    }
}
