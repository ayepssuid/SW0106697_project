<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectLeader extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->hasManyThrough(ProjectMember::class, Projects::class);
    }

    public function projectmanager()  {
        return $this->belongsTo('App\ProjectManager');
    }

    public function adminsystem()  {
        return $this->belongsTo('App\User');
    }

    
}
