<?php

namespace App\Models\User\Library;

use App\Models\Course\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUserLibrary extends Model
{
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'visible',
        'visible_for_others',
    ];

    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function userLibrary()
    {
        return $this->belongsTo(UserLibrary::class);
    }
}
