<?php

use App\Http\Controllers\AdminControl;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','rolemanager:customer'])->name('dashboard');

Route::get('/admin/dashboard', function () {
   // dd(Categorie::withCount('produits')->get());
    return view('admin',["user"=>Auth::user(),"users"=>User::paginate(6),"produits"=>Produit::with("category")->paginate(10),'categorie' => Categorie::withCount('produits')->get()]);
})->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');
Route::put('/stocks', [AdminControl::class,'ProduitCreate'])->name('ProduitCreate');

Route::get('/vendeur/dashboard', function () {
    return view('vendeur',['produits'=>Produit::all()]);
})->middleware(['auth', 'verified',"rolemanager:vendeur"])->name('vendeur');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/produit/{id}',[AdminControl::class,'editproduit'])->name('editproduit')->middleware(['auth', 'verified','rolemanager:admin']);
Route::get('/book/{id}', [OrderController::class, 'addBooktoCart'])->name('addbook.to.cart');
Route::get('/panier', [OrderController::class, 'panierv'])->name('panierv');
require __DIR__.'/auth.php';
/*Route::prefix('login')->name("user.")->controller(UserController::class)->group(function (){
    Route::get('/', 'index' )->name("login");
});*/