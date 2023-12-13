<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    public $table= 'tbl_students';
    public $primarykey = 'id';
    
    public $fillable =[
        "name",
        "student_id",
        "gender",
        "major",
        "age",
        "batch",
        "image",
    ];
    public $timestamps = false; 

    
}
