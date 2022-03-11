<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\EducationCollection;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new EducationCollection(Education::where('status', 1)->where('profile_id', 1)->get());
    }

}
