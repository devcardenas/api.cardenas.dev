<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ProfileResource;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$profile = Profile::where('status', 1)->where('profile_id', 1)->first();
        return new ProfileResource($profile);*/

        return response()->json([
            "data" => [
                "profile" => "test"
            ]
        ], 200);

    }
}
