<?php

namespace App\Models\User\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLibrary extends Model
{
    protected $fillable = [
        'name',
        'description',
        'user_librarie_id',
        'visible',
    ];

    use HasFactory;


    public function course_user_libraries()
    {
        return $this->hasMany(CourseUserLibrary::class);
    }
}
