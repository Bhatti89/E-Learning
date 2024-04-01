<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\unitExamController;
use App\Models\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Parent Routes


Route::get('parentMain', [ParentController::class,'view_parent_main']);
Route::get('parentSupport', [ParentController::class,'view_parent_support']);
Route::get('classdojo', [ParentController::class,'classdojo']);
Route::get('Parenttraining', [ParentController::class,'parenttraining']);
Route::get('checkparent', [ParentController::class,'checkparent']);
Route::get('/children/{childId}', [ParentController::class, 'showDetailsParentChild'])->name('child.details');




//Admin Routes


// routes/web.php

// Route::group(['middleware' => 'web'], function () {
//     // Parent routes...

//     // Include admin routes
//     require __DIR__.'/adminmain.php';
// });




//Admin login route
Route::get('admin/login', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'loginAdmin'])->name('admin.login');
//Admin register route
Route::get('admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register');
Route::post('admin/register', [RegisterController::class, 'createAdmin'])->name('admin.register');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::view('navbar', 'layouts.navbar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/dashboard', function (){
    return view('admin.auth.dashboard');
})->name('admin.dashboard');

Route::post('admin/logout', function(){
    Auth::guard('admin')->logout();
    return redirect()->route('admin.login')->with('success', 'Successfully logged out');})->name('admin.logout');
//courses
Route::get('adminMainCourse', [AdminController::class,'showAdminForm'])->name('adminMainCourse');
// Route::get('adminMainCourse', [AdminController::class,'showCoursesForm']);
Route::get('/courses/{adminCourseId}', [AdminController::class, 'showDetailsCourses'])->name('course.details');
Route::get('createCourse/{admin}', [AdminController::class, 'createCourse'])->name('course.create');
Route::post('createCourseNow', [AdminController::class, 'createCoursenow'])->name('course.createnow');
Route::get('editCourse/{data}', [AdminController::class, 'editCourse'])->name('course.edit');

Route::put('/courses/{id}', [AdminController::class, 'updateCourse'])->name('courses.update');
//sections

Route::get('courseMainSections/{course}', [AdminController::class,'showSectionForm'])->name('course.checkSection');
Route::get('createSection/{data}', [AdminController::class, 'createSection'])->name('section.create');
Route::post('createSectionenow', [AdminController::class, 'createSectionnow'])->name('course.sectionnow');

Route::get('editSection/{data}', [AdminController::class, 'editSection'])->name('section.edit');
Route::put('/section/{id}', [AdminController::class, 'updateSection'])->name('section.update');





//Units

Route::get('courseMainUnits/{section}', [AdminController::class,'showUnitForm'])->name('section.checkUnit');
Route::get('createUnit/{data}', [AdminController::class, 'createunit'])->name('unit.create');
Route::post('createUnitNow', [AdminController::class, 'createUnitnow'])->name('course.unitnow');


Route::get('editUnit/{data}', [AdminController::class, 'editUnit'])->name('unit.edit');
Route::put('/unit/{id}', [AdminController::class, 'updateUnit'])->name('unit.update');




//Lessons

Route::get('courseMainLessons/{unit}', [AdminController::class,'showLessonForm'])->name('unit.lessonDetail');
Route::get('createLesson/{data}', [AdminController::class, 'lessoncreate'])->name('lesson.create');
Route::post('createLessonNow', [AdminController::class, 'lessonstore'])->name('lesson.storenow');


Route::get('editLesson/{data}', [AdminController::class, 'editLesson'])->name('lesson.edit');
Route::put('/lesson/{id}', [AdminController::class, 'updateLesson'])->name('lesson.update');




// Pages

Route::get('courseMainPages/{lesson}', [AdminController::class,'showPageForm'])->name('lesson.pageDetail');
//page type
Route::get('createPage/{data}', [AdminController::class, 'pageType'])->name('Page.Type');
//plainHtml
Route::get('createPlainHtmlPage/{data}', [AdminController::class, 'createPlainHtmlPage'])->name('create.plainHtmlPage');
Route::post('storePlainHtmlPage', [AdminController::class, 'storePlainHtmlPage'])->name('store.plainHtmlPage');
//for ckedit
Route::post('uploadeditorimg', [AdminController::class, 'uploadckeditorimg'])->name('ckeditor.upload');
//Single Text Field
Route::get('createSingleTextField/{data}', [AdminController::class, 'createsingletextfield'])->name('create.singletextfield');
Route::post('storeSingleTextField', [AdminController::class, 'storesingletextfield'])->name('store.singletextfield');
//Single Textarea
Route::get('createSingleTextArea/{data}', [AdminController::class, 'createsingletextarea'])->name('create.singletextarea');
Route::post('storeSingleTextArea', [AdminController::class, 'storesingletextarea'])->name('store.singletextarea');

//Quiz pair matching
Route::get('createQuizPairMatching/{data}', [AdminController::class, 'createquizpairmatching'])->name('create.quizpairmatching');

//Quiz pair matching
Route::post('/store-Pair', [AdminController::class, 'storePair'])->name('store.pair');



//Quiz image with 4 choices
Route::get('createQuizImageWithChoices/{data}', [AdminController::class, 'createquizwithchoices'])->name('create.quizwithchoices');

Route::post('storQuizImageWithChoices', [AdminController::class, 'storequizwithchoices'])->name('store.quizwithchoices');




//Create New page Quiz choices
Route::get('createQuizMultipleChoices/{data}', [AdminController::class, 'createquizmultiplechoices'])->name('create.quizmultiplechoices');
Route::post('storeQuizWithChoices', [AdminController::class, 'storequizmultiplechoices'])->name('store.quizmultiplechoices');

//Editing pages type
Route::get('/edit/{page_type}/{id}', [AdminController::class, 'editPageDetail'])->name('edit.pageDetail');

//editing plainHtml
Route::put('/plainHtml/{id}', [AdminController::class, 'updateplainHtml'])->name('update.plainHtmlPage');
//editing single text field
Route::put('/singleTextField/{id}', [AdminController::class, 'updatesingleTextField'])->name('update.SingleTextField');
//editing single text area
Route::put('/singleTextarea/{id}', [AdminController::class, 'updatesingleTextarea'])->name('update.SingleTextarea');

//Quiz 4 Matching
Route::put('/quizPairMatching/{id}', [AdminController::class, 'updatequizPairMatching'])->name('update.quizPairMatching');

//Quiz with choices
Route::put('/QuizWithChoices/{id}', [AdminController::class, 'updatequizwithchoices'])->name('update.quizWithChoices');
//editing quiz with multiple choices
Route::put('/QuizMultipleChoices/{id}', [AdminController::class, 'updatequizmultiplechoices'])->name('update.quizMultipleChoices');




//html test

// Route::get('htmltest', [AdminController::class, 'viewtest'])->name('html.test');
// Route::post('htmltestt', [AdminController::class, 'checktest'])->name('html.testt');



//unit exam controller code
Route::get('unitExam/create/{unit}', [AdminController::class,'showUnitExam'])->name('unit.checkLesson');
Route::post('unitExam/store', [AdminController::class,'storeUnitExam'])->name('store.unitexam');
// Route::post('uploadeditorimg', [unitExamController::class, 'uploadckeditorimg'])->name('ckeditor.upload');







