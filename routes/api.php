<?php

use App\Http\Controllers\PersonnelEventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\MentorScheduleController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(UserController::class)->group(function (){
    Route::get('/user',         'index');
    Route::post('/userlogin',         'login')->name('user.login');;
    Route::post('/registerceo',         'registerceo');
    Route::post('/registermentor',         'registermentor');
    Route::put('/updatepersonnel/{id}',         'updatepersonnel');
    Route::get('/personnel/{id}',    'showpersonnel');
    Route::get('/showmentor', 'showmentor');
});


Route::controller(TeamController::class)->group(function (){
    Route::get('/teams',         'index');
    Route::post('/registerteam',         'store');
    Route::get('/team/{team_id}',    'show');
    Route::post('/registermember',         'storemember');
    Route::post('/updatemember/{id}',         'updatemember');
    Route::get('/members/{team_id}',    'showmembers');
    Route::get('/find/{team_ceo}',    'showceo');
    Route::post('/addtbi',         'addtbi');
    Route::get('/viewtbi', 'viewtbi');
    
});

Route::controller(PersonnelEventController::class)->group(function(){
    Route::post('/addcompetition',         'addcompetition');
    Route::post('/addseedfunding',         'addseedfunding');
    Route::get('/competition',         'indexcompetition');
    Route::get('/seedfunding',         'indexseedfunding');

});

Route::controller(MilestoneController::class)->group(function (){
    Route::get('/viewmilestone',         'viewmilestone');
    Route::get('/viewtopic',         'viewtopic');
    Route::post('/createtopic',         'createtopic');
    Route::get('/displaytopic/{milestone_id}',         'displaytopic');
    Route::post('/createsubmission',         'createsubmission');
    Route::get('/viewteamsubmission/{team_id}/{milestone_id}',         'viewteamsubmission');
    Route::get('/displaysubmission/{team_id}',         'displaysubmission');
    Route::put('/updatesubmission/{submission_id}',         'updatesubmission');


});

Route::controller(MentorScheduleController::class)->group(function(){
    Route::get('/viewschedule',         'viewschedule');
    Route::get('/viewmentorschedule/{id}',         'viewschedulementor');
    Route::get('/viewteamschedule/{team_id}',         'viewteamschedule');
    Route::get('/viewedteamschedule/{mentor_id}',         'viewedteamschedule');
    Route::get('/viewmentorevent/{mentor_id}',         'viewmentorevent');
    Route::post('/createschedule',         'createschedule');
    Route::post('/addmentordate',         'addmentordate');
    Route::put('/updatementorevent/{scheduling_id}', 'updatementorevent');
    Route::put('/updatementordate/{mentor_id}/{date}', 'updatementordate');
});