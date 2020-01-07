<?php


// use App\Events\ActivationCode;
// use App\Events\MyEvent;

Route::get('/', function () {
    // event(new MyEvent('heoow word'));
// return view('welcome');
return view('landingpage/index');
});
// Route::get('/admin/panel',function(){
//     event(new MyEvent('heoow word'));
//     return 'done';
// })->middleware('auth');

// Route::get('login/admin',function(){
//     return 'login/admin';
// })->middleware('auth');



Route::get('job','HomeController@job');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('user','HomeController@user');
Route::get('user/active/email/{token}','userController@activation')->name('activation.account');






// Authentication Routes...
Route::post('login', 'Auth\LoginController@login');
// Route::get('logout', 'Auth\LoginController@logout')->name('logout')->middleware('can:permission2');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('login',  'Auth\LoginController@showLoginForm')->name('login');


// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//github & google Login
Route::get('login/github','Auth\LoginController@redirectToProviderGithub');//loginRoute
Route::get('login/github/callback','Auth\LoginController@handeleProviderCallbackGithub');//callbackRoute
Route::get('login/google','Auth\LoginController@redirectToProviderGoogle');
Route::get('login/google/callback','Auth\LoginController@handleProviderCallbackGoogle');


// Dashboard routes
Route::middleware(['auth','isAdminMiddlare','can:permission2'])->group(function () {
    Route::get('dashboard','HomeController@any')->name('dashboard');
    Route::resource('articles','ArticleController');
    Route::get('users','AdminController@users');
    Route::resource('acls','PermissionController');
    Route::get('syncpermission','PermissionController@syncview');
    Route::resource('sync','syncController',['parameters' => ['levels' =>'user']]);
});
