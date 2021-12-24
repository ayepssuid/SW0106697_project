<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable  = [
        'project_name','start_date','start_date','end_date','duration','cost ','project_status','project_stage'
    ];

    public function getmanager()
    {
        return $this->belongsTo('App\ProjectManager');
    }

    public function getmembers()
    {
        return $this->belongsTo('App\ProjectMember');
    }

    public function users()  {
        return $this->belongsTo('App\User');
    }
}
