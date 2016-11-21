<?php

/****************   Model binding into route **************************/
Route::model('article', 'App\Article');
Route::model('articlecategory', 'App\ArticleCategory');
Route::model('language', 'App\Language');
Route::model('photoalbum', 'App\PhotoAlbum');
Route::model('photo', 'App\Photo');
Route::model('user', 'App\User');
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');

/***************    Site routes  **********************************/
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('aktuell', 'PagesController@aktuell');
Route::get('history', 'PagesController@history');
Route::get('produkte', 'PagesController@produkte');
Route::get('brotsortiment', 'PagesController@brotsortiment');
Route::get('dolcesalato', 'PagesController@dolcesalato');
Route::get('partyservice', 'PagesController@partyservice');
Route::get('torten', 'PagesController@torten');
Route::get('paneria', 'PagesController@paneria');
Route::get('impressum', 'PagesController@impressum');
Route::get('kontakt', 'PagesController@kontakt');
Route::get('articles', 'ArticlesController@index');
Route::get('article/{slug}', 'ArticlesController@show');
Route::get('video/{id}', 'VideoController@show');
Route::get('photo/{id}', 'PhotoController@show');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/***************    Admin routes  **********************************/
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::group(['prefix' => 'products'],function() {
        Route::get('/', ['as' => 'products', 'uses' => 'ProductController@allProduct']);
        Route::get('/new', ['as' => 'products.create', 'uses' => 'ProductController@newProduct']);

        Route::post('/store', ['as' => 'products.store', 'uses' => 'ProductController@store']);
       // Route::get('excluir/{id}', ['as' => 'arquivos.delete', 'uses' => 'ArquivoController@deletaArquivo']);
        Route::get('edit/{id}', ['as' => 'products.edit', 'uses' => 'ProductController@editProduct']);
        Route::post('update/{id}', ['as' => 'products.update', 'uses' => 'ProductController@updateProduct']);
    });
    # Admin Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index');

    # Language
    Route::get('language/data', 'Admin\LanguageController@data');
    Route::get('language/{language}/show', 'Admin\LanguageController@show');
    Route::get('language/{language}/edit', 'Admin\LanguageController@edit');
    Route::get('language/{language}/delete', 'Admin\LanguageController@delete');
    Route::resource('language', 'Admin\LanguageController');

    # Article category
    Route::get('articlecategory/data', 'Admin\ArticleCategoriesController@data');
    Route::get('articlecategory/{articlecategory}/show', 'Admin\ArticleCategoriesController@show');
    Route::get('articlecategory/{articlecategory}/edit', 'Admin\ArticleCategoriesController@edit');
    Route::get('articlecategory/{articlecategory}/delete', 'Admin\ArticleCategoriesController@delete');
    Route::get('articlecategory/reorder', 'ArticleCategoriesController@getReorder');
    Route::resource('articlecategory', 'Admin\ArticleCategoriesController');

    # Articles
    Route::get('article/data', 'Admin\ArticleController@data');
    Route::get('article/{article}/show', 'Admin\ArticleController@show');
    Route::get('article/{article}/edit', 'Admin\ArticleController@edit');
    Route::get('article/{article}/delete', 'Admin\ArticleController@delete');
    Route::get('article/reorder', 'Admin\ArticleController@getReorder');
    Route::resource('article', 'Admin\ArticleController');

    # Photo Album
    Route::get('photoalbum/data', 'Admin\PhotoAlbumController@data');
    Route::get('photoalbum/{photoalbum}/show', 'Admin\PhotoAlbumController@show');
    Route::get('photoalbum/{photoalbum}/edit', 'Admin\PhotoAlbumController@edit');
    Route::get('photoalbum/{photoalbum}/delete', 'Admin\PhotoAlbumController@delete');
    Route::resource('photoalbum', 'Admin\PhotoAlbumController');

    # Photo
    Route::get('photo/data', 'Admin\PhotoController@data');
    Route::get('photo/{photo}/show', 'Admin\PhotoController@show');
    Route::get('photo/{photo}/edit', 'Admin\PhotoController@edit');
    Route::get('photo/{photo}/delete', 'Admin\PhotoController@delete');
    Route::resource('photo', 'Admin\PhotoController');

    # Users
    Route::get('user/data', 'Admin\UserController@data');
    Route::get('user/{user}/show', 'Admin\UserController@show');
    Route::get('user/{user}/edit', 'Admin\UserController@edit');
    Route::get('user/{user}/delete', 'Admin\UserController@delete');
    Route::resource('user', 'Admin\UserController');
});
