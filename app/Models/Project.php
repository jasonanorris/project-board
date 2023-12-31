<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    public function tasks()
    {
        return $this->morphMany(Task::class, 'taskable');
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
