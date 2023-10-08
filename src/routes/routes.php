<?php

use Illuminate\Support\Facades\Route;
use Nomanur\SanctumCrud\Controllers\SanctumCrudController;
use Nomanur\SanctumCrud\Controllers\SanctumCrudRoleController;
use Nomanur\SanctumCrud\Controllers\SanctumCrudUserRoleController;

Route::apiResource('users', SanctumCrudController::class)->except(['edit', 'create', 'store', 'update'])->middleware(['auth:sanctum', 'ability:admin,super-admin']);

Route::post('login', [SanctumCrudController::class, 'login']);
Route::post('users', [SanctumCrudController::class, 'store']);

Route::put('users/{user}', [SanctumCrudController::class, 'update'])->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);
Route::post('users/{user}', [SanctumCrudController::class, 'update'])->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);
Route::patch('users/{user}', [SanctumCrudController::class, 'update'])->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);
Route::get('me', [SanctumCrudController::class, 'me'])->middleware('auth:sanctum');

Route::apiResource('roles', SanctumCrudRoleController::class)->except(['create', 'edit'])->middleware(['auth:sanctum', 'ability:admin,super-admin,user']);
Route::apiResource('users.roles', SanctumCrudUserRoleController::class)->except(['create', 'edit', 'show', 'update'])->middleware(['auth:sanctum', 'ability:admin,super-admin']);