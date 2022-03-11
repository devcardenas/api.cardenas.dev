<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SkillCollection;
use App\Http\Resources\V1\ProjectCollection;

class ProjectController extends Controller
{

    /**
     * Get projects by type
     */
    public function getProjectsByType($project_type_id)
    {
        return new ProjectCollection(Project::where('status', 1)->where('project_type_id', $project_type_id)->where('profile_id', 1)->get());
    }

      /**
     *  Get total of projects
     */
    public function getTotalProjects()
    {
        return response()->json([
            'data' => [
                'total_projects' => Project::where('status', 1)->count()
            ]
        ]);
    }

}
