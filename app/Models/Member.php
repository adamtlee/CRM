<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Member extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'phone',
        'registration_date',
        'program_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'registration_date' => 'datetime',
        'program_id' => 'integer',
    ];

    public function classrooms(): BelongsToMany
    {
        return $this->belongsToMany(Classroom::class);
    }

    public function programs(): BelongsToMany
    {
        return $this->belongsToMany(Program::class);
    }
}
