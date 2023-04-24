<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\TabulationController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\Overallscore;
use App\Http\Controllers\CreteriaController;
use App\Http\Controllers\MailController;

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
Route::get('/',[AnnouncementController::class,'home']);

Route::get('/send-email',[MailController::class,'sendEmail'])->name('send-email');

Route::get('/admin',[StudentController::class,'admin'])->middleware('alreadyLoggedIn');
Route::get('/accounting',[StudentController::class,'accounting']);

Route::get('/judgeprofile',[StudentController::class,'judgeprofile'])->middleware('alreadyLoggedIn');
Route::get('/dashboard',[StudentController::class,'Dashboard'])->middleware('alreadyLoggedIn');
Route::get('/advertisement',[StudentController::class,'advertisement'])->middleware('alreadyLoggedIn');

Route::get('/loadingprofile',[StudentController::class,'loadingprofile'])->middleware('alreadyLoggedIn');
Route::get('/masterceremony',[StudentController::class,'masterceremony'])->middleware('alreadyLoggedIn');
Route::get('/masterminors',[StudentController::class,'masterminors'])->middleware('alreadyLoggedIn');


//announcement controller;

Route::get('/announcement',[AnnouncementController::class,'announcement'])->middleware('alreadyLoggedIn');
Route::put('update-announcement/{id}',[AnnouncementController::class,'updateannoncement']);

Route::put('update-event/{id}',[AnnouncementController::class,'updateevent']);
Route::put('update-event2/{id}',[AnnouncementController::class,'updateevent2']);
Route::put('update-event3/{id}',[AnnouncementController::class,'updateevent3']);
Route::put('update-event4/{id}',[AnnouncementController::class,'updateevent4']);
Route::put('update-event5/{id}',[AnnouncementController::class,'updateevent5']);
Route::put('update-event6/{id}',[AnnouncementController::class,'updateevent6']);
Route::put('update-event7/{id}',[AnnouncementController::class,'updateevent7']);
Route::put('update-event8/{id}',[AnnouncementController::class,'updateevent8']);
Route::put('update-event9/{id}',[AnnouncementController::class,'updateevent9']);



Route::post('editjoin/{id}',[AnnouncementController::class,'editjoin'])->middleware('alreadyLoggedIn');

 //student and log in controller;
Route::get('/login',[StudentController::class,'login']);

Route::post('/register-user',[StudentController::class,'registerUser'])->name('register-user');
Route::post('login-user',[StudentController::class,'loginUser'])->name('login-user');
Route::get('changepass',[StudentController::class,'changepass'])->middleware('alreadyLoggedIn');
Route::get('/dashviewcandi',[TabulationController  ::class,'dashviewcandi'])->middleware('alreadyLoggedIn');
Route::get('/votenow',[TabulationController  ::class,'votenow'])->middleware('alreadyLoggedIn');
Route::get('addvote/{id}',[TabulationController::class,'addvote'])->middleware('alreadyLoggedIn');
Route::put('castvote/{id}',[TabulationController::class,'castvote']);




//admin controller;

Route::post('/addcriteria-user',[TabulationController::class,'addcriteriauser'])->name('addcriteria-user');
Route::post('/addcandidates-user',[TabulationController::class,'addcandidatesuser'])->name('addcandidates-user');
Route::put('updatecandidates/{id}',[TabulationController::class,'updatecandidates']);
Route::get('editcandidates/{id}',[TabulationController::class,'editcandidates'])->middleware('alreadyLoggedIn');
Route::get('/searchtally',[TabulationController::class,'searchtally'])->name('searchtally');
Route::get('viewjudge/{Name}',[TabulationController::class,'viewjudge'])->middleware('alreadyLoggedIn');
Route::post('updatescore',[TabulationController::class,'updatescore'])->middleware('alreadyLoggedIn');
Route::get('/adminvote',[TabulationController  ::class,'adminvote'])->middleware('alreadyLoggedIn');
Route::get('editvoteadmin/{id}',[TabulationController::class,'editvoteadmin'])->middleware('alreadyLoggedIn');
Route::put('editvote/{id}',[TabulationController::class,'editvote']);
Route::get('usereditincomeadmin/{id}',[IncomeController::class,'usereditincomeadmin'])->middleware('alreadyLoggedIn');
Route::post('editincomeadmin',[IncomeController::class,'editincomeadmin'])->middleware('alreadyLoggedIn');
Route::get('/adminoldcandidates',[TabulationController  ::class,'adminoldcandidates'])->middleware('alreadyLoggedIn');
Route::get('editcri/{id}',[TabulationController::class,'editcri'])->middleware('alreadyLoggedIn');
Route::post('updatcritera1',[TabulationController::class,'updatcritera1'])->middleware('alreadyLoggedIn');
Route::get('updatetop/{id}',[TabulationController::class,'updatetop']);
Route::get('/minorawards',[TabulationController::class,'minorawards'])->middleware('alreadyLoggedIn');;
Route::get('GETMINORWIN/{id}',[TabulationController::class,'GETMINORWIN']);
Route::get('maleminor/{id}',[TabulationController::class,'maleminor']);
Route::get('updatewinners/{id}',[TabulationController::class,'updatewinners']);



Route::get('showup12/{id}',[TabulationController::class,'viewtally'])->middleware('alreadyLoggedIn');
Route::get('/event',[TabulationController::class,'getALLStudents2'])->middleware('alreadyLoggedIn');
Route::get('/getwinner',[TabulationController::class,'getwinner'])->middleware('alreadyLoggedIn');
Route::get('/voteleading',[TabulationController::class,'voteleading'])->middleware('alreadyLoggedIn');


Route::get('/income',[IncomeController::class,'getALLStudents'])->middleware('alreadyLoggedIn');
Route::get('showload/{id}',[StudentController::class,'showupload'])->middleware('alreadyLoggedIn');
Route::post('ed-load',[StudentController::class,'editload'])->middleware('alreadyLoggedIn');

Route::post('ed-user',[StudentController::class,'editupdate'])->middleware('alreadyLoggedIn');
Route::get('showup/{id}',[StudentController::class,'showdataup'])->middleware('alreadyLoggedIn');
Route::get('/search',[StudentController::class,'search'])->name('search');



Route::get('/search2',[IncomeController::class,'search2'])->name('search2');

Route::get('/search4',[IncomeController::class,'search4'])->name('search4');




Route::get('admineditincome/{Name}',[IncomeController::class,'showincome'])->middleware('alreadyLoggedIn');
Route::post('/add-user',[StudentController::class,'addUser'])->name('add-user');

Route::get('edit/{id}',[StudentController::class,'updatestudents']);
Route::get('getvotewin/{id}',[StudentController::class,'getvotewin']);


//Route::get('update/{id}',[StudentController::class,'showdataup']);

Route::get('/teacher',[StudentController::class,'teacher'])->middleware('alreadyLoggedIn');
Route::get('/logout',[StudentController::class,'logout']);

////edit profile pic and passwordus///*
Route::put('update-student/{id}',[StudentController::class,'update']);
Route::post('passwordus',[StudentController::class,'passwordus'])->middleware('alreadyLoggedIn');




////income dashboard///*
Route::get('/loadingdata',[StudentController::class,'getALLStudents1'])->middleware('alreadyLoggedIn');
Route::get('/search1',[StudentController::class,'search1'])->name('search1');
Route::get('showload1/{id}',[StudentController::class,'showupload1'])->middleware('alreadyLoggedIn');


////judge//////
Route::get('/judgegetcandidates',[StudentController::class,'judgegetcandidates'])->middleware('alreadyLoggedIn');
Route::get('givescore/{id}',[StudentController::class,'givescore'])->middleware('alreadyLoggedIn');
Route::get('deletecri/{id}',[StudentController::class,'deletecri']);
Route::post('savescore',[StudentController::class,'savescore'])->middleware('alreadyLoggedIn');
Route::post('submitscores',[StudentController::class,'submitscores'])->middleware('alreadyLoggedIn');
Route::get('deleteall/{id}',[StudentController::class,'deleteall']);





