<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id',
        'nisn',
        'nik',
        'gender',
        'birth_place',
        'birth_date',
        'address',
        'phone',
        'photo',
        'father_name',
        'mother_name',
        'program',
        'is_transfer',
        'previous_school',
        'class',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
