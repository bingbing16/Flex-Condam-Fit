<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ExerciseController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\JustController;
use App\Http\Controllers\Admin\NutrCatController;
use App\Http\Controllers\Admin\DietController;
use App\Http\Controllers\Admin\DeveloperController;
use App\Http\Controllers\Admin\StretchingController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\WorkoutsController;
use App\Http\Controllers\Frontend\StretchingsController;
use App\Http\Controllers\Frontend\FoodController;
use App\Http\Controllers\Frontend\DevelopersController;









/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class, 'welcome']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', 'auth', 'isAdmin'
])->group(function () {
    Route::get('/dashboard',[HomeController::class, 'redirect'])->name('dashboard');


    Route::get('category', [CategoryController::class, 'index']);
    Route::get('category/create', [CategoryController::class, 'create']);
    Route::post('category/add', [CategoryController::class, 'add']);
    Route::get('category/{category}/edit', [CategoryController::class, 'edit']);
    Route::put('category/{category}', [CategoryController::class, 'update']);
    
    Route::get('exercises',[ExerciseController::class, 'index']);
    Route::get('exercises/create',[ExerciseController::class, 'create']);
    Route::post('exercises/add',[ExerciseController::class, 'add']);
    Route::get('exercises/{exercises}/edit',[ExerciseController::class, 'edit']);
    Route::put('exercises/{exercises}', [ExerciseController::class, 'update']);
    Route::get('exercises/{exercise_id}/delete', [ExerciseController::class, 'delete']);
    
    Route::get('exercise-image/{exercise__image_id}/delete', [ExerciseController::class, 'destroyImage']);
    
    
    Route::get('setting',[SettingController::class, 'index']);
    Route::get('setting/create',[SettingController::class, 'create']);
    Route::post('setting/add',[SettingController::class, 'add']);
    Route::get('setting/{setting}/edit',[SettingController::class, 'edit']);
    Route::put('setting/{setting}', [SettingController::class, 'update']);
    
    Route::get('user',[UserController::class, 'index']);
    
    Route::get('nutrition-category', [NutrCatController::class, 'index']);
    Route::get('nutrition-category/create', [NutrCatController::class, 'create']);
    Route::post('nutrition-category/add', [NutrCatController::class, 'add']);
    Route::get('nutrition-category/{nutcast}/edit', [NutrCatController::class, 'edit']);
    Route::put('nutrition-category/{nutcast}', [NutrCatController::class, 'update']);
    Route::get('nutrition-category/{nutcast}/delete', [NutrCatController::class, 'delete']);
    
    Route::get('nutrition',[DietController::class, 'index']);
    Route::get('nutrition/create', [DietController::class, 'create']);
    Route::post('nutrition/add', [DietController::class, 'add']);
    Route::get('nutrition/{diets}/edit', [DietController::class, 'edit']);
    Route::put('nutrition/{diets}', [DietController::class, 'update']);
    Route::get('nutrition/{diets}/delete', [DietController::class, 'delete']);
    
    Route::get('stretching',[StretchingController::class, 'index']);
    Route::get('stretching/create',[StretchingController::class, 'create']);
    Route::post('stretching/add',[StretchingController::class, 'add']);
    Route::get('stretching/{stretchs}/edit',[StretchingController::class, 'edit']);
    Route::put('stretching/{stretchs}',[StretchingController::class, 'update']);
    Route::get('stretching/{stretchs}/delete',[StretchingController::class, 'delete']);
    
    Route::get('devs',[DeveloperController::class, 'index']);
    Route::get('devs/create',[DeveloperController::class, 'create']);
    Route::post('devs/add',[DeveloperController::class, 'add']);
    Route::get('devs/{developer}/edit',[DeveloperController::class, 'edit']);
    Route::put('devs/{developer}',[DeveloperController::class, 'update']);
    Route::get('devs/{developer}/delete',[DeveloperController::class, 'delete']);
    
    
// Route::get('dashboard',[JustController::class, 'index']);


});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function (){


});


Route::get('about-us',[AboutUsController::class, 'aboutus']);
Route::get('workouts',[WorkoutsController::class, 'workouts']);
Route::get('stretchings',[StretchingsController::class, 'stretchings']);
Route::get('food',[FoodController::class, 'food']);
Route::get('developer',[DevelopersController::class, 'developer']);

Route::get('workouts/{category_description}',[WorkoutsController::class, 'exercises']);
Route::get('food/{category_name}',[FoodController::class, 'calories']);



Route::get('redirect',[HomeController::class, 'redirect']);

Route::post('add_comment',[HomeController::class, 'add_comment']);
Route::post('add_reply',[HomeController::class, 'add_reply']);


 



// Route::prefix('admin')->group(function (){

//     Route::get('redirect', [App\Http\Controllers\HomeController::class, 'index']);

// });

Route::prefix('admin')->group(function (){
    
    
});