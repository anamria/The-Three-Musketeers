<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\backend\Materi2Controller;
use App\Http\Controllers\backend\Materi3Controller;
use App\Http\Controllers\backend\Materi4Controller;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\backend\GameController;
use App\Http\Controllers\backend\MateriController;
use App\Http\Controllers\backend\Materi1Controller;
use App\Http\Controllers\backend\MateriSatuController;
use App\Http\Controllers\backend\UsermanagementController;
use App\Http\Controllers\backend\SoalquizcategoryController;
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
    return view('Landingpage');
});

Auth::routes();

Route::get('lpgame', [App\Http\Controllers\backend\GameController::class,'Lpgame']);
Route::get('gamedandd', [App\Http\Controllers\backend\GameController::class,'Gamedd']);
Route::get('gametts', [App\Http\Controllers\backend\GameController::class,'Gametts']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\backend\AboutController::class, 'index']);

Route::get('list_Soalquizcategory', [App\Http\Controllers\backend\SoalquizcategoryController::class,'SoalquizCategoryList'])->name('Soalquizcategory.index');
Route::get('/add_Soalquizcategory',[App\Http\Controllers\backend\SoalquizcategoryController::class,'SoalquizCategoryAdd'])->name('Soalquizcategoryadd');
Route::post('/insert_Soalquizcategory', [App\Http\Controllers\backend\SoalquizcategoryController::class,'SoalquizCategoryInsert']);
Route::resource('/posts', \App\Http\Controllers\SoalquizcategoryController::class);
Route::get('/edit_Soalquizcategory/{id}', [App\Http\Controllers\backend\SoalquizcategoryController::class,'SoalquizEditCategory']);
Route::post('/update_Soalquizcategory/{id}', [App\Http\Controllers\backend\SoalquizcategoryController::class,'SoalquizUpdateCategory']);
Route::get('/delete_Soalquizcategory/{id}', [App\Http\Controllers\backend\SoalquizcategoryController::class,'SoalquizDeleteCategory']);

Route::get('list_Materi', [App\Http\Controllers\backend\MateriController::class,'MateriCategoryList'])->name('Matericategory.index');
Route::get('/add_Materi',[App\Http\Controllers\backend\MateriController::class,'MateriCategoryAdd'])->name('MateriCategoryAdd');
Route::post('/insert_Materi', [App\Http\Controllers\backend\MateriController::class,'MateriCategoryInsert']);
Route::resource('/posts', \App\Http\Controllers\MateriController::class);
Route::get('/edit_Materi/{id_materi}', [App\Http\Controllers\backend\MateriController::class,'MateriEditCategory']);
Route::post('/update_Materi/{id_materi}', [App\Http\Controllers\backend\MateriController::class,'MateriUpdateCategory']);
Route::get('/delete_Materi/{id_materi}', [App\Http\Controllers\backend\MateriController::class,'MateriDeleteCategory']);

Route::get('user_list', [App\Http\Controllers\backend\UsermanagementController::class,'UserList'])->name('user.index');
Route::get('/add_user', [App\Http\Controllers\backend\UsermanagementController::class,'UserAdd']);
Route::post('/insert_user', [App\Http\Controllers\backend\UsermanagementController::class,'UserInsert']);
Route::get('/edit_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserEdit']);
Route::post('/update_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserUpdate']);
Route::get('/delete_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserDelete']);


Route::get('/kuis', [App\Http\Controllers\backend\KuisController::class,'index'])->name('kuis.index');
Route::post('/add_kuis', [App\Http\Controllers\backend\KuisController::class,'store']);

Route::get('/lb', [App\Http\Controllers\backend\BoardController::class,'index'])->name('leaderboard.index');
Route::post('/export_lb', [App\Http\Controllers\backend\BoardController::class,'store']);

Route::get('/materisatu', [App\Http\Controllers\backend\MateriSatuController::class,'index'])->name('materisatu.index');
Route::get('/materi2', [App\Http\Controllers\backend\Materi2Controller::class,'index'])->name('materi2.index');
Route::get('/materi3', [App\Http\Controllers\backend\Materi3Controller::class,'index'])->name('materi3.index');
Route::get('/materi4', [App\Http\Controllers\backend\Materi4Controller::class,'index'])->name('materi4.index');
