<?php
use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotoController; 
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;


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

//route halaman utama landing page
Route::get('/', [AppController::class, 'index'] );
Route::get('/berita', [AppController::class, 'berita'] );
Route::get('/detail/{slug}', [AppController::class, 'detail'] );
Route::get('/foto', [PhotoController::class, 'show'])->name('foto');
Route::resource('/admin/photo', PhotoController::class);


// Route login admin 
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Dashboard admin  dengan middleware auth
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth'); 


// routing Laravel untuk fitur Blog, dengan middleware auth untuk memastikan hanya pengguna yang sudah login yang dapat mengaksesnya
Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');


//routing utntuk cud foto pada bagian admin 
Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::delete('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth'); 

//routing form untuk ppdb 
Route::get('/ppdb', [PpdbController::class, 'index'])->name('ppdb.ppdb');
Route::post('/ppdb', [PpdbController::class, 'store'])->name('ppdb.store'); 
Route::get('/ppdb/cetak/{id}', [PpdbController::class, 'cetakUser'])->name('ppdb.cetak.user');



//admin panel ppdb
Route::get('/admin/ppdb', [PpdbController::class, 'adminIndex'])->name('admin.ppdb.index');
Route::post('/admin/ppdb/{id}/verify', [PpdbController::class, 'verify'])->name('admin.ppdb.verify');
Route::get('/admin/ppdb/{id}', [PpdbController::class, 'show'])->name('admin.ppdb.show');
Route::get('/admin/ppdb/cetak/{id}', [PpdbController::class, 'cetakAdmin'])->name('ppdb.cetak.admin');



//routing untuk kontak saran
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/list', [ContactController::class, 'show'])->name('contact.list');


//routing kontak admin
Route::middleware('auth')->group(function () {
Route::get('/admin/contacts', [ContactController::class, 'show'])->name('admin.contacts');
Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.delete');
Route::post('/admin/contacts/reply/{id}', [ContactController::class, 'reply'])->name('admin.contacts.reply');

});

//routing untuk profil
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');






