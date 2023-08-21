<?php

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

Route::get('/', [
    'as' => 'home_path',
    'uses' => 'PagesController@home'
]);

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

Route::get('/projects', [
    'as' => 'projects_path',
    'uses' => 'PagesController@projects'
]);

Route::get('/projects/azure', [
    'as' => 'azure_path',
    'uses' => 'PagesController@azure'
]);

Route::post('/projects/azure', [
    'as' => 'azure_path',
    'uses' => 'PagesController@getAzureForm'
]);

Route::post('/projects/azure-inquire', [
    'as' => 'azure_inquire_path',
    'uses' => 'PagesController@getAzureInquireForm'
]);

Route::get('/projects/blu-horizon', [
    'as' => 'bluhorizon_path',
    'uses' => 'PagesController@bluHorizon'
]);

Route::post('/projects/blu-horizon', [
    'as' => 'bluhorizon_path',
    'uses' => 'PagesController@getBluHorizonForm'
]);

Route::post('/projects/blu-horizon-inquire', [
    'as' => 'bluhorizon_inquire_path',
    'uses' => 'PagesController@getBluHorizonInquireForm'
]);

Route::get('/projects/il-lido', [
    'as' => 'illido_path',
    'uses' => 'PagesController@ilLido'
]);


Route::post('/projects/il-lido', [
    'as' => 'illido_path',
    'uses' => 'PagesController@getIlLidoForm'
]);

Route::post('/projects/il-lido-inquire', [
    'as' => 'illido_inquire_path',
    'uses' => 'PagesController@getIlLidoInquireForm'
]);

Route::get('/projects/downtown', [
    'as' => 'downtown_path',
    'uses' => 'PagesController@downtown'
]);

Route::post('/projects/downtown', [
    'as' => 'downtown_path',
    'uses' => 'PagesController@getDowntownForm'
]);

Route::post('/projects/downtown-inquire', [
    'as' => 'downtown_inquire_path',
    'uses' => 'PagesController@getDowntownInquireForm'
]);

Route::get('/projects/iliados', [
    'as' => 'iliados_path',
    'uses' => 'PagesController@iliados'
]);

Route::post('/projects/iliados', [
    'as' => 'iliados_path',
    'uses' => 'PagesController@getiliadosForm'
]);

Route::post('/projects/iliados-inquire', [
    'as' => 'iliados_inquire_path',
    'uses' => 'PagesController@getiliadosInquireForm'
]);

Route::get('/news', [
    'as' => 'news_path',
    'uses' => 'PagesController@news'
]);

Route::get('/news-details-{news_id}', [
    'as' => 'news_details_path',
    'uses' => 'PagesController@newsDetails'
]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'PagesController@contact'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'PagesController@getContactForm'
]);

Route::get('/work-with-us', [
    'as' => 'work_path',
    'uses' => 'PagesController@work'
]);

Route::post('/work-with-us', [
    'as' => 'work_path',
    'uses' => 'PagesController@getWorkForm'
]);


Route::get('/projects/damareos-59', [
    'as' => 'damareos_path',
    'uses' => 'PagesController@damareos'
]);

Route::post('/projects/damareos-59', [
    'as' => 'damareos_path',
    'uses' => 'PagesController@getDamareosForm'
]);

// Damagitou
Route::get('/projects/damagitou 5', [
    'as' => 'damagitou_path',
    'uses' => 'PagesController@damagitou'
]);
Route::post('/projects/damagitou-inquire', [
    'as' => 'damagitou_inquire_path',
    'uses' => 'PagesController@getDamagitouInquireForm'
]);
Route::get('/projects/frinis-38', [
    'as' => 'frinis_path',
    'uses' => 'PagesController@frinis'
]);

Route::post('/projects/frinis-inquire', [
    'as' => 'frinis_inquire_path',
    'uses' => 'PagesController@getFrinisInquireForm'
]);