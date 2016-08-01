<?php

Route::get('/', function () {
    return view('welcome');
});

// list all users
// show the form to create a user
// process the form to create
// show the form to edit a user
// process the edit form
// delete a user
Route::resource('users', 'UserController');
