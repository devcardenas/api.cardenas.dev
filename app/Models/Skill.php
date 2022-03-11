<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skills';
    protected $primaryKey = 'skill_id';

    public function skillDetail()
    {
        return $this->hasMany(SkillDetail::class, 'skill_id', 'skill_id');
    }

}
