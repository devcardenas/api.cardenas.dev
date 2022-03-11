<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SocialMediaCollection;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return new SocialMediaCollection(SocialMedia::where('status', 1)->where('profile_id', 1)->get());
    }
}
