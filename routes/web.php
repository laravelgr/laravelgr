<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/locale/{locale}', function ($locale) {
    if (in_array($locale, config('app.available_locales'))) {
        session(['locale' => $locale]);
    }

    return redirect()->back();
})->name('locale.switch');

Route::get('/s/{shortcut}', function ($shortcut) {

    $urls = config('shortcuts.urls');

    if (array_key_exists($shortcut, $urls)) {
        return redirect()->away($urls[$shortcut]);
    }

    abort(404);

});

Route::get('/sponsors', function () {
    return view('sponsors');
})->name('sponsors');
