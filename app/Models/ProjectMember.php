<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMember extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->hasManyThrough(Project::class);
    }

    public function projectleader()  {
        return $this->belongsTo('App\ProjectLeader');
    }

    public function projectmanager()
    {
        return $this->belongsTo('App\ProjectManager');
    }

    public function adminsystem()  {
        return $this->belongsTo('App\User');
    }
}

