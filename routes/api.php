<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login',[App\Http\Controllers\ApiController::class, 'login']);
Route::post('/register',[App\Http\Controllers\ApiController::class, 'register']);
Route::post('/send-mail-otp',[App\Http\Controllers\ApiController::class, 'sendmailotp']);
Route::post('/match-otp',[App\Http\Controllers\ApiController::class, 'matchotp']);
Route::post('/register-step2',[App\Http\Controllers\ApiController::class, 'registerstep2']);
Route::post('/register-step3',[App\Http\Controllers\ApiController::class, 'registerstep3']);
Route::post('/self-medical-history',[App\Http\Controllers\ApiController::class, 'selfMedicalHistory']);
Route::post('/family-history',[App\Http\Controllers\ApiController::class, 'familyHistory']);
Route::post('/hebits-lifestyle',[App\Http\Controllers\ApiController::class, 'habitslifestyle']); 
Route::post('/general-health',[App\Http\Controllers\ApiController::class, 'generalHealth']);
Route::post('/upload-prescription',[App\Http\Controllers\ApiController::class, 'uploadprescription']);
Route::post('/upload-medical-prescription',[App\Http\Controllers\ApiController::class, 'uploadmedicalprescription']);
Route::post('/state',[App\Http\Controllers\ApiController::class, 'state']);
Route::post('/city',[App\Http\Controllers\ApiController::class, 'city']);
Route::post('/region',[App\Http\Controllers\ApiController::class, 'region']);
Route::post('/disease',[App\Http\Controllers\ApiController::class, 'disease']);
Route::post('/allergies',[App\Http\Controllers\ApiController::class, 'allergies']);
Route::post('/surgical',[App\Http\Controllers\ApiController::class, 'Surgical']);
Route::post('/chat-symptoms',[App\Http\Controllers\ApiController::class, 'chatSymptoms']);
Route::post('/visit',[App\Http\Controllers\ApiController::class, 'visit']);
Route::post('/doctors',[App\Http\Controllers\ApiController::class, 'doctors']);
Route::post('users',[App\Http\Controllers\ApiController::class, 'users']);
Route::any('authentication-device',[App\Http\Controllers\ApiController::class, 'deviceauth']);
Route::post('doctor-register',[App\Http\Controllers\ApiController::class, 'doctorregister']);

Route::post('availiable-unavailible',[App\Http\Controllers\ApiController::class, 'availiableUnavailible']);
Route::any('notifiation-request',[App\Http\Controllers\ApiController::class, 'notification-request']);

Route::post('notification',[App\Http\Controllers\ApiController::class, 'notification']);
Route::post('notification-list',[App\Http\Controllers\ApiController::class, 'notificationlist']);
Route::post('notification-list-user',[App\Http\Controllers\ApiController::class, 'notificationlistuser']);

Route::post('notification-check',[App\Http\Controllers\ApiController::class, 'notificationcheck']);

Route::get('/send-forgot-mail',[App\Http\Controllers\ApiController::class,'sendforgetmail']);
Route::get('/match-forgot-detail',[App\Http\Controllers\ApiController::class,'matchforgetdeail']);
Route::get('/querys',[App\Http\Controllers\ApiController::class,'querys']);
Route::get('/matchdocs',[App\Http\Controllers\ApiController::class,'matchdocs']);

Route::get('/send-doctor-mail',[App\Http\Controllers\ApiController::class,'askexpertdoctormessage']);
Route::post('/dummy-add',[App\Http\Controllers\ApiController::class,'dummyadd']);
Route::get('/dummy-list',[App\Http\Controllers\ApiController::class,'dummylist']);
Route::any('/patient-symt',[App\Http\Controllers\ApiController::class,'docSymptoms']);
Route::any('/patient-symt-list',[App\Http\Controllers\ApiController::class,'doclist']);
Route::any('/add-case',[App\Http\Controllers\ApiController::class,'paitientadd']);
Route::any('/case-list',[App\Http\Controllers\ApiController::class,'paitientlist']);

Route::any('/clinical-investigation',[App\Http\Controllers\ApiController::class,'clinicalInvestigation']);
Route::any('/clinical-investigation-list',[App\Http\Controllers\ApiController::class,'clinicalInvestigationlist']);

Route::any('/doctor-observation',[App\Http\Controllers\ApiController::class,'doctorobservation']);
Route::any('/doctor-observation-list',[App\Http\Controllers\ApiController::class,'doctorobservationlist']);


Route::any('/daignosys',[App\Http\Controllers\ApiController::class,'daignosys']);
Route::any('/daignosys-list',[App\Http\Controllers\ApiController::class,'daignosyslist']);

Route::any('/surgery',[App\Http\Controllers\ApiController::class,'surgery']);
Route::any('/surgery-list',[App\Http\Controllers\ApiController::class,'surgerylist']);

Route::any('/medicine',[App\Http\Controllers\ApiController::class,'medicine']);
Route::any('/medicine-list',[App\Http\Controllers\ApiController::class,'medicinelist']);

Route::any('/excercise',[App\Http\Controllers\ApiController::class,'excercise']);
Route::any('/excercise-list',[App\Http\Controllers\ApiController::class,'excerciselist']);

Route::any('/food',[App\Http\Controllers\ApiController::class,'food']);
Route::any('/food-list',[App\Http\Controllers\ApiController::class,'foodlist']);

Route::any('/physiotherapy',[App\Http\Controllers\ApiController::class,'physiotherapy']);
Route::any('/physiotherapy-list',[App\Http\Controllers\ApiController::class,'physiotherapylist']);

Route::any('/preventive',[App\Http\Controllers\ApiController::class,'preventive']);
Route::any('/preventive-list',[App\Http\Controllers\ApiController::class,'preventivelist']);
Route::any('/observation-medicos',[App\Http\Controllers\ApiController::class,'observationmedicos']);
Route::any('/observation-patient',[App\Http\Controllers\ApiController::class,'obseravationpatient']);



Route::any('/final-list',[App\Http\Controllers\ApiController::class,'finalist']);


Route::any('/chat-user-list',[App\Http\Controllers\ApiController::class,'chatUserList']);
 
Route::any('/chat-patient-detail',[App\Http\Controllers\ApiController::class,'chatPatientDetial']);

Route::any('/search-disease',[App\Http\Controllers\ApiController::class,'searchdisease']);



 ?>