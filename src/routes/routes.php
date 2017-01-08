<?php

Route::get('demo', function() {
    return "this is a service provider";
});
Route::get('test', function() {
    return kindle::display();
});
