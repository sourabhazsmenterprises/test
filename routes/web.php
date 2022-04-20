<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PermissionsController;

use App\Http\Controllers\Backend\RolesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [\App\Http\Controllers\Frontend\UiController::class, 'index'])->name('index');

Route::get('/prescribtion-detail', [\App\Http\Controllers\Frontend\UiController::class, 'prescribtionDetail'])->name('prescribtion-detail');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

    Route::get('/', [\App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');
	Route::get('bannerimages',[\App\Http\Controllers\Backend\BannerImagesController::class, 'index']);   
	Route::get('bannerimages/create',[\App\Http\Controllers\Backend\BannerImagesController::class, 'create']);    
  Route::get('bannerimages/edit/{id}',[\App\Http\Controllers\Backend\BannerImagesController::class, 'edit']);    
  Route::any('bannerimages/store/',[\App\Http\Controllers\Backend\BannerImagesController::class, 'store']);    
   Route::any('bannerimages/update/{id}',[\App\Http\Controllers\Backend\BannerImagesController::class, 'update']);    
  Route::any('bannerimages/destroy/{id}',[\App\Http\Controllers\Backend\BannerImagesController::class, 'destroy']);    
	  Route::any('bannerimages/show/{id}',[\App\Http\Controllers\Backend\BannerImagesController::class, 'show']);    
 
    Route::delete('bannerimages/destroy',[\App\Http\Controllers\Backend\BannerImagesController::class,'massDestroy'])->name('bannerimages.massDestroy');
	
	Route::get('services',[\App\Http\Controllers\Backend\ServicesController::class, 'index']);   
	Route::get('services/create',[\App\Http\Controllers\Backend\ServicesController::class, 'create']);    
  Route::get('services/edit/{id}',[\App\Http\Controllers\Backend\ServicesController::class, 'edit']);    
  Route::any('services/store/',[\App\Http\Controllers\Backend\ServicesController::class, 'store']);    
   Route::any('services/update/{id}',[\App\Http\Controllers\Backend\ServicesController::class, 'update']);    
  Route::any('services/destroy/{id}',[\App\Http\Controllers\Backend\ServicesController::class, 'destroy']);    
	  Route::any('services/show/{id}',[\App\Http\Controllers\Backend\ServicesController::class, 'show']);    
 
    Route::delete('services/destroy',[\App\Http\Controllers\Backend\ServicesController::class,'massDestroy'])->name('services.massDestroy');
   
	
	Route::get('blogs',[\App\Http\Controllers\Backend\BlogsController::class, 'index']);   
	Route::get('blogs/create',[\App\Http\Controllers\Backend\BlogsController::class, 'create']);    
  Route::get('blogs/edit/{id}',[\App\Http\Controllers\Backend\BlogsController::class, 'edit']);    
  Route::any('blogs/store/',[\App\Http\Controllers\Backend\BlogsController::class, 'store']);    
   Route::any('blogs/update/{id}',[\App\Http\Controllers\Backend\BlogsController::class, 'update']);    
  Route::any('blogs/destroy/{id}',[\App\Http\Controllers\Backend\BlogsController::class, 'destroy']);    
	  Route::any('blogs/show/{id}',[\App\Http\Controllers\Backend\BlogsController::class, 'show']);    
 
    Route::delete('blogs/destroy',[\App\Http\Controllers\Backend\ServicesController::class,'massDestroy'])->name('services.massDestroy');
   
	
	
	
	Route::get('symptoms',[\App\Http\Controllers\Backend\SymptomsController::class, 'index']);   
	Route::get('symptoms/create',[\App\Http\Controllers\Backend\SymptomsController::class, 'create']);    
  Route::get('symptoms/edit/{id}',[\App\Http\Controllers\Backend\SymptomsController::class, 'edit']);    
  Route::any('symptoms/store/',[\App\Http\Controllers\Backend\SymptomsController::class, 'store']);    
   Route::any('symptoms/update/{id}',[\App\Http\Controllers\Backend\SymptomsController::class, 'update']);    
  Route::any('symptoms/destroy/{id}',[\App\Http\Controllers\Backend\SymptomsController::class, 'destroy']);    
	  Route::any('symptoms/show/{id}',[\App\Http\Controllers\Backend\SymptomsController::class, 'show']);    
 
    Route::delete('symptoms/destroy',[\App\Http\Controllers\Backend\SymptomsController::class,'massDestroy'])->name('services.massDestroy');
   
	
	
	Route::get('hospitals',[\App\Http\Controllers\Backend\HospitalsController::class, 'index']);   
	Route::get('hospitals/create',[\App\Http\Controllers\Backend\HospitalsController::class, 'create']);    
  Route::get('hospitals/edit/{id}',[\App\Http\Controllers\Backend\HospitalsController::class, 'edit']);    
  Route::any('hospitals/store/',[\App\Http\Controllers\Backend\HospitalsController::class, 'store']);    
   Route::any('hospitals/update/{id}',[\App\Http\Controllers\Backend\HospitalsController::class, 'update']);    
  Route::any('hospitals/destroy/{id}',[\App\Http\Controllers\Backend\HospitalsController::class, 'destroy']);    
	  Route::any('hospitals/show/{id}',[\App\Http\Controllers\Backend\HospitalsController::class, 'show']);    
 
    Route::delete('hospitals/destroy',[\App\Http\Controllers\Backend\HospitalsController::class,'massDestroy'])->name('services.massDestroy');
	
	Route::get('pharmacy',[\App\Http\Controllers\Backend\PharmacyController::class, 'index']);   
	Route::get('pharmacy/create',[\App\Http\Controllers\Backend\PharmacyController::class, 'create']);    
  Route::get('pharmacy/edit/{id}',[\App\Http\Controllers\Backend\PharmacyController::class, 'edit']);    
  Route::any('pharmacy/store/',[\App\Http\Controllers\Backend\PharmacyController::class, 'store']);    
   Route::any('pharmacy/update/{id}',[\App\Http\Controllers\Backend\PharmacyController::class, 'update']);    
  Route::any('pharmacy/destroy/{id}',[\App\Http\Controllers\Backend\PharmacyController::class, 'destroy']);    
	  Route::any('pharmacy/show/{id}',[\App\Http\Controllers\Backend\PharmacyController::class, 'show']);    
 
    Route::delete('pharmacy/destroy',[\App\Http\Controllers\Backend\PharmacyController::class,'massDestroy'])->name('services.massDestroy');
	
	
	
		Route::get('labs',[\App\Http\Controllers\Backend\LabsController::class, 'index']);   
	Route::get('labs/create',[\App\Http\Controllers\Backend\LabsController::class, 'create']);    
  Route::get('labs/edit/{id}',[\App\Http\Controllers\Backend\LabsController::class, 'edit']);    
  Route::any('labs/store/',[\App\Http\Controllers\Backend\LabsController::class, 'store']);    
   Route::any('labs/update/{id}',[\App\Http\Controllers\Backend\LabsController::class, 'update']);    
  Route::any('labs/destroy/{id}',[\App\Http\Controllers\Backend\LabsController::class, 'destroy']);    
	  Route::any('labs/show/{id}',[\App\Http\Controllers\Backend\LabsController::class, 'show']);    
 
    Route::delete('labs/destroy',[\App\Http\Controllers\Backend\LabsController::class,'massDestroy'])->name('services.massDestroy');
	
	Route::get('doctor-details',[\App\Http\Controllers\Backend\UsersController::class, 'doct']);  
	
	Route::get('users',[\App\Http\Controllers\Backend\UsersController::class, 'index']);   
	Route::get('users/create',[\App\Http\Controllers\Backend\UsersController::class, 'create']);    
  Route::get('users/edit/{id}',[\App\Http\Controllers\Backend\UsersController::class, 'edit']);    
  Route::any('users/store/',[\App\Http\Controllers\Backend\UsersController::class, 'store']);    
   Route::any('users/update/{id}',[\App\Http\Controllers\Backend\UsersController::class, 'update']);    
  Route::any('users/destroy/{id}',[\App\Http\Controllers\Backend\UsersController::class, 'destroy']);    
	  Route::any('users/show/{id}',[\App\Http\Controllers\Backend\UsersController::class, 'show']);    
 
    Route::delete('users/destroy',[\App\Http\Controllers\Backend\UsersController::class,'massDestroy'])->name('users.massDestroy');
   
		Route::get('doctor/create',[\App\Http\Controllers\Backend\UsersController::class, 'doctorcreate']);    
  Route::get('doctor/edit/{id}',[\App\Http\Controllers\Backend\UsersController::class, 'doctoredit']); 
	
	
	
   	Route::get('permissions/create',[\App\Http\Controllers\Backend\PermissionsController::class, 'create']);    
  Route::get('permissions/edit/{id}',[\App\Http\Controllers\Backend\PermissionsController::class, 'edit']);    
  Route::any('permissions/store/',[\App\Http\Controllers\Backend\PermissionsController::class, 'store']);    
   Route::any('permissions/update/{id}',[\App\Http\Controllers\Backend\PermissionsController::class, 'update']);    
  Route::any('permissions/destroy/{id}',[\App\Http\Controllers\Backend\PermissionsController::class, 'destroy']);    
	  Route::any('permissions/show/{id}',[\App\Http\Controllers\Backend\PermissionsController::class, 'show']);    
 
    Route::delete('permissions/destroy',[\App\Http\Controllers\Backend\PermissionsController::class,'massDestroy'])->name('permissions.massDestroy');

    Route::resource('permissions', PermissionsController::class);

    Route::delete('roles/destroy', [\App\Http\Controllers\Backend\RolesController::class,'massDestroy'])->name('roles.massDestroy');
	Route::get('roles/create',[\App\Http\Controllers\Backend\RolesController::class, 'create']);    
  Route::get('roles/edit/{id}',[\App\Http\Controllers\Backend\RolesController::class, 'edit']);    
  Route::any('roles/store/',[\App\Http\Controllers\Backend\RolesController::class, 'store']);    
   Route::any('roles/update/{id}',[\App\Http\Controllers\Backend\RolesController::class, 'update']);    
  Route::any('roles/destroy/{id}',[\App\Http\Controllers\Backend\RolesController::class, 'destroy']);    
	  Route::any('roles/show/{id}',[\App\Http\Controllers\Backend\RolesController::class, 'show']);    
  
    Route::resource('roles',RolesController::class);
	
	
	
		Route::get('disease',[\App\Http\Controllers\Backend\DiseaseController::class, 'index']);   
	Route::get('disease/create',[\App\Http\Controllers\Backend\DiseaseController::class, 'create']);    
  Route::get('disease/edit/{id}',[\App\Http\Controllers\Backend\DiseaseController::class, 'edit']);    
  Route::any('disease/store/',[\App\Http\Controllers\Backend\DiseaseController::class, 'store']);    
   Route::any('disease/update/{id}',[\App\Http\Controllers\Backend\DiseaseController::class, 'update']);    
  Route::any('disease/destroy/{id}',[\App\Http\Controllers\Backend\DiseaseController::class, 'destroy']);    
	  Route::any('disease/show/{id}',[\App\Http\Controllers\Backend\DiseaseController::class, 'show']);    
 
    Route::delete('disease/destroy',[\App\Http\Controllers\Backend\DiseaseController::class,'massDestroy'])->name('disease.massDestroy');	
	
}); 


Route::get('/forget-send-email', [\App\Http\Controllers\Frontend\UiController::class, 'forgetsendemail'])->name('forget-send-email');
Route::get('/foget-password', [\App\Http\Controllers\Frontend\UiController::class, 'fogetpassword'])->name('foget-password');
Route::get('/resets-password/{id}', [\App\Http\Controllers\Frontend\UiController::class, 'resetpassword'])->name('reset-password');
Route::any('/password-submit', [\App\Http\Controllers\Frontend\UiController::class, 'passwordsubmit'])->name('password-submit');






Route::get('/index', [\App\Http\Controllers\Frontend\UiController::class, 'index'])->name('index');
Route::get('/about-us', [\App\Http\Controllers\Frontend\UiController::class, 'aboutus'])->name('about-us');
Route::get('/contact-us', [\App\Http\Controllers\Frontend\UiController::class, 'contactus'])->name('contact-us');
Route::get('/services', [\App\Http\Controllers\Frontend\UiController::class, 'services'])->name('services');
Route::get('/userreg', [\App\Http\Controllers\Frontend\UiController::class, 'userreg'])->name('userreg');
Route::get('/userlog', [\App\Http\Controllers\Frontend\UiController::class, 'userlog'])->name('userlog');
Route::post('/registersubmit', [\App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('registersubmit');
Route::post('/loginsubmit', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('loginsubmit');
Route::get('/profile', [\App\Http\Controllers\Frontend\UiController::class, 'profile'])->name('profile');
Route::get('/json-response', [\App\Http\Controllers\Frontend\UiController::class, 'jsonresponse'])->name('json-response');
Route::get('/online-chat', [\App\Http\Controllers\Frontend\UiController::class, 'onlinechat'])->name('online-chat');
Route::get('/ask-as-expert', [\App\Http\Controllers\Frontend\UiController::class, 'askasexpert'])->name('ask-as-expert');
Route::get('/emergency', [\App\Http\Controllers\Frontend\UiController::class, 'emergency'])->name('emergency');
Route::get('/medical', [\App\Http\Controllers\Frontend\UiController::class, 'medical'])->name('medical');
Route::get('/p2p', [\App\Http\Controllers\Frontend\UiController::class, 'p2p'])->name('p2p');
Route::get('service-home', [\App\Http\Controllers\Frontend\UiController::class, 'serviceHome'])->name('service-home');
 Route::any('register2',[\App\Http\Controllers\Frontend\UiController::class, 'register2']);   
 Route::any('register2submit',[\App\Http\Controllers\Frontend\UiController::class, 'register2submit']);   
 Route::any('register3',[\App\Http\Controllers\Frontend\UiController::class, 'register3']); 
 Route::any('register3submit',[\App\Http\Controllers\Frontend\UiController::class, 'register3submit']); 
  Route::any('register4',[\App\Http\Controllers\Frontend\UiController::class, 'register4']); 
 Route::any('register4submit',[\App\Http\Controllers\Frontend\UiController::class, 'register4submit']); 
  Route::any('register5',[\App\Http\Controllers\Frontend\UiController::class, 'register5']);    
 Route::any('register5submit',[\App\Http\Controllers\Frontend\UiController::class, 'register5submit']); 
 Route::any('register6submit',[\App\Http\Controllers\Frontend\UiController::class, 'register6submit']); 
 Route::any('register7submit',[\App\Http\Controllers\Frontend\UiController::class, 'register7submit']); 
 Route::any('register8submit',[\App\Http\Controllers\Frontend\UiController::class, 'register8submit']); 
 Route::any('register9submit',[\App\Http\Controllers\Frontend\UiController::class, 'register9submit']); 
 Route::any('symptoms',[\App\Http\Controllers\Frontend\UiController::class, 'onlinechat1']); 
Route::any('symptoms-submit1',[\App\Http\Controllers\Frontend\UiController::class, 'symptomssubmit1']);
Route::any('symptoms-submit2',[\App\Http\Controllers\Frontend\UiController::class, 'symptomssubmit2']);
 Route::any('visit',[\App\Http\Controllers\Frontend\UiController::class, 'visit']); 
 Route::any('visit-submit',[\App\Http\Controllers\Frontend\UiController::class, 'visitsubmit']);
 Route::any('chat-direct',[\App\Http\Controllers\Frontend\UiController::class, 'chatdirect']);
 Route::any('doctors-register',[\App\Http\Controllers\Frontend\UiController::class, 'doctorsregisters']);
 Route::any('doctorsregisterssubmit',[\App\Http\Controllers\Frontend\UiController::class, 'doctorsregisterssubmit']);
 Route::any('doctorsregisterssubmitupdate/{id}',[\App\Http\Controllers\Frontend\UiController::class, 'doctorsregisterssubmitupdate']);
Route::any('submitdata',[\App\Http\Controllers\Frontend\UiController::class, 'profile']);
Route::get('logout1', function () {
        Auth::logout();
        return redirect('/');
    });
 Route::get('/cache', function() {
    Artisan::call('config:cache');
    return "Cache is cleared";
});