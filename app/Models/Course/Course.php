<?php

namespace App\Models\Course;

use App\Models\User;
use App\Models\User\Library\CourseUserLibrary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course_user_libraries()
    {
        return $this->hasMany(CourseUserLibrary::class);
    }

    /**
     * @return string[]
     */
    public function getFillable(): array
    {
        return $this->fillable;
    }

    /**
     * @param string[] $fillable
     */
    public function setFillable(array $fillable): void
    {
        $this->fillable = $fillable;
    }
}
