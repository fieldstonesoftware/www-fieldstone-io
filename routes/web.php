<?php

if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', '2.x');
}

Route::get('docs', 'DocsController@showRootPage');

Route::get('docs/{version}/{page?}', 'DocsController@show')->name('docs.version');

Route::get('partners', 'PartnersController@index');
Route::get('partner/{partner}', 'PartnersController@show');

Route::get('calculators/labor_rate', function() { return view('calculators.labor_rate_calculator'); });

Route::get('/', function () {
    return view('home');
});
