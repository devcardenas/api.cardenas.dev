<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\ProjectType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ProjectTypeCollection;

class ProjectTypeController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ProjectTypeCollection(ProjectType::where('status', 1)->orderBy('name', 'asc')->get());
    }

    /**
     * Get projects type with projects
     */
    public function getProjectsTypesWithProjects()
    {
        return new ProjectTypeCollection(ProjectType::where('status', 1)->with('projects')->get());
    }
}
