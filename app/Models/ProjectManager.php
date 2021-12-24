<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectManager extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function projectmembers()
    {
        return $this->hasManyThrough(ProjectMember::class, ProjectLeader::class, Project::class);
    }

    public function adminsystem()  {
        return $this->belongsTo('App\User');
    }
}

