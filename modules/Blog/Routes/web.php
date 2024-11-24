<?php
use Blog\Controllers\PostController;

Route::prefix('backend')->group(function () {
    Route::resource('posts', PostController::class);
});
