<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::apiResource('projects', ProjectController::class);

Route::get('projects/{project}/tasks', [TaskController::class, 'index']);
Route::post('projects/{project}/tasks', [TaskController::class, 'store']);
Route::apiResource('tasks', TaskController::class)->except(['index', 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
