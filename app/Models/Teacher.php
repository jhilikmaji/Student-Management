<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    protected $fillable =['name','email','subject','phoneNumber','gender','address','dob','teacher_id','creating_ip'];
    use HasFactory;
}
