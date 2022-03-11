<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Skill;
//use App\Models\SkillDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SkillCollection;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Forma alternativa si no se quisiera usar las relaciones en laravel
        /*$skills = Skill::where('status', 1)->where('profile_id', 1)->get();

        foreach ($skills as $key => $skill) {
            $skill->skill_detail = SkillDetail::where('status', 1)->where('skill_id', $skill->skill_id)->get();
        }

        return new SkillCollection($skills);*/

        return new SkillCollection(Skill::where('status', 1)->where('profile_id', 1)->get());
    }

}
