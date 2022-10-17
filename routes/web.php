<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);

Route::get('/about', [App\Http\Controllers\Frontend\FrontendController::class, 'aboutUs']);
Route::get('/courses', [App\Http\Controllers\Frontend\FrontendController::class, 'coursesf']);
Route::get('/quiz', [App\Http\Controllers\Frontend\FrontendController::class, 'quizf']);
Route::get('/quiz/{quiz_id}', [App\Http\Controllers\Frontend\FrontendController::class, 'Viewquestions']);
Route::get('/submit/{question}', [App\Http\Controllers\Frontend\FrontendController::class, 'checkanswers']);
Route::get('/events', [App\Http\Controllers\Frontend\FrontendController::class, 'eventf']);

Route::get('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contactf']);
Route::post('/contact/save', [App\Http\Controllers\Frontend\FrontendController::class, 'save'])->name('contact.save');

Route::get('/blog', [App\Http\Controllers\Frontend\FrontendController::class, 'blogf']);
Route::get('/instructor', [App\Http\Controllers\Frontend\FrontendController::class, 'instructorf']);
Route::get('/faq', [App\Http\Controllers\Frontend\FrontendController::class, 'faqf']);
Route::get('/forum', [App\Http\Controllers\Frontend\FrontendController::class, 'forumf']);
Route::get('/member-ship', [App\Http\Controllers\Frontend\FrontendController::class, 'membershipf']);
Route::get('/404', [App\Http\Controllers\Frontend\FrontendController::class, 'four']);
Route::get('/quizesingle', [App\Http\Controllers\Frontend\FrontendController::class, 'quizes']);
Route::get('/quizestart', [App\Http\Controllers\Frontend\FrontendController::class, 'quizestart']);


Route::post('/auth/save', [App\Http\Controllers\Frontend\FrontendController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [App\Http\Controllers\Frontend\FrontendController::class, 'check'])->name('auth.check');

Route::get('/auth/logout', [App\Http\Controllers\Frontend\FrontendController::class, 'logout'])->name('auth.logout');


Route::get('/auth/login', [App\Http\Controllers\Frontend\FrontendController::class, 'logins'])->name('auth.login');
Route::get('/auth/register', [App\Http\Controllers\Frontend\FrontendController::class, 'registers'])->name('auth.register');

Route::post('/subscribe/save', [App\Http\Controllers\SubscriberController::class, 'save'])->name('subscribe.save');


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::resource('events',App\Http\Controllers\EventController::class);
    Route::resource('courzes',App\Http\Controllers\CozeController::class);
    Route::resource('abouts',App\Http\Controllers\AboutController::class);
    Route::resource('subscribers',App\Http\Controllers\SubscriberController::class);
    Route::resource('enquiries',App\Http\Controllers\EventController::class);
 
   // Route::get('/events/create',  [App\Http\Controllers\EventController::class, 'create']);

    Route::get('/dashboard',  [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('category',  [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category',  [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category',  [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}',  [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}',  [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}',  [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    //QUIZ
    Route::get('quiz',  [App\Http\Controllers\Admin\QuizController::class, 'index']);
    Route::get('quizzes/{id}',  [App\Http\Controllers\Admin\QuizController::class, 'show']);
    Route::get('add-quiz',  [App\Http\Controllers\Admin\QuizController::class, 'create']);
    Route::post('add-quiz',  [App\Http\Controllers\Admin\QuizController::class, 'store']);
    Route::get('edit-question/{question_id}',  [App\Http\Controllers\Admin\QuizController::class, 'edit']);
   // Route::get('/update-quiztitle/{quiz_id}',  [App\Http\Controllers\Admin\QuizController::class, 'editquiz']);
    Route::put('update-question/{category_id}',  [App\Http\Controllers\Admin\QuizController::class, 'update']);
    Route::get('delete-question/{q_id}',  [App\Http\Controllers\Admin\QuizController::class, 'destroy']);
    Route::put('edit-quiztitle/{quiz_id}',  [App\Http\Controllers\Admin\QuizController::class, 'editquiz']);
    Route::get('edit-quiztitle/{quiz_id}',  [App\Http\Controllers\Admin\QuizController::class, 'updatequiz']);
    Route::get('delete-quiztitle/{quiz_id}',  [App\Http\Controllers\Admin\QuizController::class, 'destroyquiz']);


    //levels
    Route::get('level',  [App\Http\Controllers\LevelController::class, 'index']);
    Route::get('add-level',  [App\Http\Controllers\LevelController::class, 'create']);
    Route::post('add-level',  [App\Http\Controllers\LevelController::class, 'store']);
    Route::get('edit-level/{level_id}',  [App\Http\Controllers\LevelController::class, 'edit']);
    Route::put('update-level/{level_id}',  [App\Http\Controllers\LevelController::class, 'update']);
    Route::get('delete-level/{level_id}',  [App\Http\Controllers\LevelController::class, 'destroy']);

    //Cates
    Route::get('cate',  [App\Http\Controllers\CoursecateController::class, 'index']);
    Route::get('add-cate',  [App\Http\Controllers\CoursecateController::class, 'create']);
    Route::post('add-cate',  [App\Http\Controllers\CoursecateController::class, 'store']);
    Route::get('edit-cate/{coursecate_id}',  [App\Http\Controllers\CoursecateController::class, 'edit']);
    Route::put('update-cate/{coursecate_id}',  [App\Http\Controllers\CoursecateController::class, 'update']);
    Route::get('delete-cate/{coursecate_id}',  [App\Http\Controllers\CoursecateController::class, 'destroy']);


     //Prices
     Route::get('price',  [App\Http\Controllers\PriceController::class, 'index']);
     Route::get('add-price',  [App\Http\Controllers\PriceController::class, 'create']);
     Route::post('add-price',  [App\Http\Controllers\PriceController::class, 'store']);
     Route::get('edit-price/{price_id}',  [App\Http\Controllers\PriceController::class, 'edit']);
     Route::put('update-price/{price_id}',  [App\Http\Controllers\PriceController::class, 'update']);
     Route::get('delete-price/{price_id}',  [App\Http\Controllers\PriceController::class, 'destroy']);



    Route::get('posts',  [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post',  [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-post',  [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('edit-post/{post_id}',  [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}',  [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('delete-post/{post_id}',  [App\Http\Controllers\Admin\PostController::class, 'destroy']);

    Route::get('users',  [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('user/{user_id}',  [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}',  [App\Http\Controllers\Admin\UserController::class, 'update']);

    Route::get('supporters',  [App\Http\Controllers\Admin\SupportyController::class,'index']);
    Route::get('add-supporter',  [App\Http\Controllers\Admin\SupportyController::class, 'create']);
    Route::post('add-supporter',  [App\Http\Controllers\Admin\SupportyController::class, 'store']);

    //Enquiries
    Route::get('enquiries',  [App\Http\Controllers\EqueryController::class, 'index']);
    Route::get('enquiry/{id}',  [App\Http\Controllers\EqueryController::class, 'destroy']);

    //footer Contacts
  // Route::get('contacts',  [App\Http\Controllers\ContactController::class, 'index']);
   Route::get('contacts/{id}',  [App\Http\Controllers\ContactController::class, 'edit']);
   // Route::post('contacts/{id}',  [App\Http\Controllers\ContactController::class, 'update'])->name('contacts.update');
  // Route::put('contacts/{id}', [App\Http\Controllers\ContactController::class, 'update'])->name;
   Route::resource('contacts',App\Http\Controllers\ContactController::class);

    //applications
    Route::get('foundation', [App\Http\Controllers\DataController::class, 'foundationGetAll'])->name('foundation.get');
    Route::get('individual', [App\Http\Controllers\DataController::class, 'individualGetAll'])->name('individual.get');
    Route::get('pa', [App\Http\Controllers\DataController::class, 'paGetAll'])->name('pa.get');
    Route::get('studio', [App\Http\Controllers\DataController::class, 'studioGetAll'])->name('studio.get');



});

// comments

