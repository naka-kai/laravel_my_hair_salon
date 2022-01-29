<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'birthday',
        'sex',
        'student_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function reserves()
    {
        return $this->hasMany(Reserve::class);
    }

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
