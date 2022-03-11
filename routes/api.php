<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\SkillController;
use App\Http\Controllers\Api\V1\ProfileController;
use App\Http\Controllers\Api\V1\ProjectController;
use App\Http\Controllers\Api\V1\EducationController;
use App\Http\Controllers\Api\V1\ExperienceController;
use App\Http\Controllers\Api\V1\ProjectTypeController;
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

Route::get('/v1/profile', [ProfileController::class, 'index']); // Get profile
Route::get('/v1/social-media', [SocialMediaController::class, 'index']); // Get all social media
Route::get('/v1/experience', [ExperienceController::class, 'index']); // Get all experiences
Route::get('/v1/education', [EducationController::class, 'index']); // get all educations
Route::get('/v1/skills', [SkillController::class, 'index']); // Get all skills
Route::get('/v1/total-projects', [ProjectController::class, 'getTotalProjects']); // Get total of projects
Route::get('/v1/projects', [ProjectTypeController::class, 'getProjectsTypesWithProjects']); // Get projects type with projects
Route::get('/v1/projects/types', [ProjectTypeController::class, 'index']); // Get projects types
Route::get('/v1/projects/{project_type_id}', [ProjectController::class, 'getProjectsByType']);  // Get projects by type


