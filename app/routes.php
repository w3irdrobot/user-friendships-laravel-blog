<?php

// Create reminders routes
Route::controller('password', 'RemindersController');

// Create dashboard route
Route::controller('dashboard', 'DashboardController');

// Create auth routes
Route::controller('/', 'HomeController');