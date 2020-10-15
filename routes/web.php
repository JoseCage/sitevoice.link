<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain('app.'.config('app.url'))->group(function ($app) {

    Route::layout('layouts.auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::livewire('login', 'auth.login')
            ->name('login');

        Route::livewire('register', 'auth.register')
            ->name('register');
    });

        Route::livewire('password/reset', 'auth.passwords.email')
            ->name('password.request');

        Route::livewire('password/reset/{token}', 'auth.passwords.reset')
            ->name('password.reset');

        Route::middleware('auth')->group(function () {
            Route::livewire('email/verify', 'auth.verify')
                ->middleware('throttle:6,1')
                ->name('verification.notice');

            Route::livewire('password/confirm', 'auth.passwords.confirm')
                ->name('password.confirm');
        });
    });

    Route::middleware('auth')->group(function () {
        Route::get('email/verify/{id}/{hash}', 'Auth\EmailVerificationController')
            ->middleware('signed')
            ->name('verification.verify');

        Route::post('logout', 'Auth\LogoutController')
            ->name('logout');
    });

        $app->group(['prefix' =>'/', 'namespace' => 'App', 'middleware' => ['auth', 'verified']], function ($app) {
        $app->livewire('/', 'dashboard.dashboard')->name('dashboard');
        //$app->livewire('/sites', 'dashboard.dashboard.sites.sites')->name('dashboard');
        $app->group(['prefix' => 'sites'], function ($site) {
            $site->livewire('/', 'dashboard.sites.sites')->name('dashboard.sites');
            $site->livewire('/create', 'dashboard.sites.create')->name('dashboard.sites.create');
            //$site->livewire('/edit/{site:uuid}', 'dashboard.sites.edit')->name('dashboard.sites.edit');
            $site->put('/edit/{site:uuid}', 'SiteController@updateSite')->name('dashboard.sites.edit');
            $site->delete('/{site:uuid}', 'SiteController@deleteSite')->name('dashboard.sites.delete');
        });
        $app->group(['prefix' => 'articles'], function ($site) {
            $site->livewire('/', 'dashboard.sites.article')->name('dashboard.articles');
            $site->livewire('/create', 'dashboard.sites.newArticle')->name('dashboard.articles.create');
            $site->post('download/{article:uuid}', 'ArticleController@downloadArticle')->name('dashboard.articles.download');
        });
    });
});

Route::view('/', 'welcome')->name('home');
Route::get('app', function () {
    return redirect()->route('dashboard');
});
