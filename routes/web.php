<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\FactsController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\AboutAddController;

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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/service', [MainController::class, 'service'])->name('service');
Route::get('/courses', [MainController::class, 'courses'])->name('courses');
Route::get('/team', [MainController::class, 'team'])->name('team');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::post('/contact_add', [MainController::class, 'contact_add'])->name('contact_add');
Route::get('/takhira', [MainController::class, 'takhira'])->middleware(['auth',])->name('takhira');
Route::resource('about_add', AboutAddController::class)->middleware(['auth',]);

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function(){

    Route::resource('banner', BannerController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('news', NewsController::class);
    Route::resource('facts', FactsController::class);
    Route::resource('teacher', TeacherController::class);
    Route::resource('category', CourseCategoryController::class);
    Route::resource('course', CourseController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('contact', ContactController::class);

});


Route::get('admin/takhira', function () {
    return view('admin.admin');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
