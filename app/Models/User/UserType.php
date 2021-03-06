<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    public $studentType = 'STUDENT';
    public $teacherType = 'TEACHER';
    public $monitorType = 'MONITOR';
    public $othersType = 'OTHER';

    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function Users()
    {
        return $this->hasMany(User::class);
    }

    public function UsersByType($name)
    {
        return $this->hasMany(User::class)->where('name', $name);
    }

}
