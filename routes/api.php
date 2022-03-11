<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\SkillController;
use App\Http\Controllers\Api\V1\ProfileController;
use App\Http\Controllers\Api\V1\EducationController;
use App\Http\Controllers\Api\V1\ExperienceController;
use App\Http\Controllers\Api\V1\SocialMediaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/profile', [ProfileController::class, 'index']);
Route::get('/v1/social-media', [SocialMediaController::class, 'index']);
Route::get('/v1/experience', [ExperienceController::class, 'index']);
Route::get('/v1/education', [EducationController::class, 'index']);
Route::get('/v1/skills', [SkillController::class, 'index']);


