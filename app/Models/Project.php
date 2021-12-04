<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['name'];

    /**
     * function to return all tasks within a project
     *
     * @return Tasks[]
     */
    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
