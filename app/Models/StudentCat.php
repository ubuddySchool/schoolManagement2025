<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCat extends Model
{
    use HasFactory;

    protected $table = 'student_form_cat';

    protected $fillable = ['category'];

    public function forms()
{
    return $this->hasMany(StudentFormList::class, 'cat_id');
}

}
