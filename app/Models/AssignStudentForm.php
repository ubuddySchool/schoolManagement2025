<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Schoolsession;
use App\Models\Admin;
class AssignStudentForm extends Model
{
    use HasFactory;

    protected $table = 'assign_student_form';

    protected $fillable = [
        'school_id',
        'session_id',
        'auth_form_id',
        'status',
    ];

    public function school()
{
    return $this->belongsTo(User::class);
}

public function session()
{
    return $this->belongsTo(Schoolsession::class);
}

public function form()
{
    return $this->belongsTo(Admin::class);
}

}
