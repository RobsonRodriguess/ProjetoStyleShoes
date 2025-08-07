<?php

use App\Http\Controllers\TenisController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Tenis;

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', [NoticiaController::class, 'home'])->name('home');
Route::resource('noticias', NoticiaController::class);


Route::get('/dashboard', [NoticiaController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');
Route::put('/noticias/{noticia}', [NoticiaController::class, 'update'])->name('noticias.update');
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::get('/search', [NoticiaController::class, 'search'])->name('search');

Route::get('/paginacasual', function () {
    return view('paginacasual');
});
    
Route::get('/paginastreet', function () {
    return view('paginastreet');
});

Route::get('/paginafeminina', function () {
    return view('paginafeminina');
});

Route::get('/chuteiras', function () {
    return view('chuteiras');
});

Route::get('/paginaesportivo', function () {
    return view('paginaesportivo');
});

Route::resource('tenis', \App\Http\Controllers\TenisController::class)->middleware('auth');

Route::get('/dashboard', function () {
    $tenis = Tenis::all();
    return view('dashboard', compact('tenis'));
})->middleware(['auth'])->name('dashboard');


Route::get('/paginacasual', function () {
    $tenis = Tenis::where('categoria', 'casual')->get();
    return view('paginacasual', compact('tenis'));
})->name('casual');

Route::get('/paginastreetweare', function () {
    $tenis = Tenis::where('categoria', 'streetweare')->get();
    return view('paginastreetweare', compact('tenis'));
})->name('streetweare');

Route::get('/paginafeminino', function () {
    $tenis = Tenis::where('categoria', 'feminino')->get();
    return view('paginafeminino', compact('tenis'));
})->name('feminino');

Route::get('/paginachuteiras', function () {
    $tenis = Tenis::where('categoria', 'chuteiras')->get();
    return view('paginachuteiras', compact('tenis'));
})->name('chuteiras');

Route::get('/paginaesportivo', function () {
    $tenis = Tenis::where('categoria', 'esportivo')->get();
    return view('paginaesportivo', compact('tenis'));
})->name('esportivo');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
