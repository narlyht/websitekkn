<?php

use Illuminate\Support\Facades\Route;
use App\Models\Umkm;
use App\Models\News;
use App\Http\Controllers\Admin\AdminUmkmController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Middleware\AdminAuth;

/*
|--------------------------------------------------------------------------
| Public Routes (Direktori UMKM & Berita Kelurahan Cikokol)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $umkms = Umkm::all();
    return view('home', compact('umkms'));
})->name('home');

Route::get('/umkm', function () {
    $umkms = Umkm::all();
    return view('umkm', compact('umkms'));
})->name('umkm.index');

Route::get('/berita', function () {
    $newsList = News::latest()->get();
    return view('berita', compact('newsList'));
})->name('news.index');

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan.index');

Route::get('/tim-kkn', function () {
    return view('tim-kkn');
})->name('tim-kkn.index');

Route::get('/umkm/{id}', function ($id) {
    $umkm = Umkm::findOrFail($id);
    return view('umkm-detail', compact('umkm'));
})->name('umkm.show');

Route::get('/berita/{id}', function ($id) {
    $news = News::findOrFail($id);
    return view('news-detail', compact('news'));
})->name('news.show');

/*
|--------------------------------------------------------------------------
| Admin Management Routes (Dashboard & CRUD UMKM / Berita)
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminUmkmController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminUmkmController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminUmkmController::class, 'logout'])->name('admin.logout');

Route::middleware([AdminAuth::class])->prefix('admin')->group(function () {
    // UMKM Management
    Route::get('/umkm', [AdminUmkmController::class, 'index'])->name('admin.dashboard');
    Route::get('/umkm/create', [AdminUmkmController::class, 'create'])->name('admin.umkm.create');
    Route::post('/umkm', [AdminUmkmController::class, 'store'])->name('admin.umkm.store');
    Route::get('/umkm/{id}/edit', [AdminUmkmController::class, 'edit'])->name('admin.umkm.edit');
    Route::put('/umkm/{id}', [AdminUmkmController::class, 'update'])->name('admin.umkm.update');
    Route::delete('/umkm/{id}', [AdminUmkmController::class, 'destroy'])->name('admin.umkm.destroy');

    // News Management
    Route::get('/news', [AdminNewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news', [AdminNewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{id}/edit', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/{id}', [AdminNewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/news/{id}', [AdminNewsController::class, 'destroy'])->name('admin.news.destroy');
});
