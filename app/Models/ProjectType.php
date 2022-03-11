<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;

    protected $table = 'projects_types';
    protected $primaryKey = 'project_type_id';

    public function projects()
    {
        return $this->hasMany(Project::class, 'project_type_id', 'project_type_id');
    }

}
