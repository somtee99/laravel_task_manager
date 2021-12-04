<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'priority', 'project_id'
    ];

    /**
     * function to get the project a task belongs to
     *
     * @return Project
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
