<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentformlist extends Model
{
    use HasFactory;

    protected $table = 'student_form_list';

    protected $fillable = ['auth_name','cat_id'];

    /**
     * Relationship: Each form belongs to a category.
     */
    public function category()
    {
        return $this->belongsTo(StudentCat::class, 'cat_id');
    }
}
