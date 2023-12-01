<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['project'];

    protected $fillable = [
        'title',
        'description'
    ];

    public function project() {
        $return = $this->belongsTo(Project::class);
        //dd($return);
        return $return;
        
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function markAsCompleted()
    {
        $this->status = 'completed';
        $this->save();
        return true;
    }

    public function scopeOpen($query)
    {
        $query->where('status', 'open');
    }
}
