<?php
    Route::get('/todo', 'Bosunski\\Todo\\Controllers\\MainController@index');
    Route::post('/bosunski-save-todo', 'Bosunski\\Todo\\Controllers\\MainController@saveTask')->name('savetodo');
    Route::delete('/bosunski-delete-task/{id}', 'Bosunski\\Todo\\Controllers\\MainController@deleteTask')->name('deletetask');
    Route::put('/bosunski-edit-task', 'Bosunski\\Todo\\Controllers\\MainController@editTask')->name('edittask');
    Route::post('/bosunski-add-category', 'Bosunski\\Todo\\Controllers\\MainController@addCategory')->name('addcategory');
    Route::post('/bosunski-edit-category', 'Bosunski\\Todo\\Controllers\\MainController@editCategory')->name('editcategory');
