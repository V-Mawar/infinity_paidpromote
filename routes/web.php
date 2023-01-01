<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\UserController;
use PharIo\Mainfest\Url;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\KreatorController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PromoController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello", function() {
    echo "hello word";
});


Route::get("/hii", function(){
    echo "hii joni";
});


Route::get("/biodata", )->name("bio");


// Route::get("/biodata", [ContohController::class, "biodata"])->name("biodata");

// Route::get("/tugas",[ContohController::class,"tugas"] )->name("tugas");


// Route::get("/jadwalkuliah",[ContohController::class,"jadwalkuliah"] )->name("jadwalkuliah");

// Route::get("/keuangan", [ContohController::class, )->name("keuangan");

// Route::get("/kerjaan", [ContohController::class, )->name("kerjaan");


Route::get("/hii/{nama})",function($nama){
echo "hii $nama";
})->name("hii");


// Route::get("/hai/{nama}",function($nama){
//     return view("hai")
//     ->with ("nama",$nama)
//     ->with ("mk","web lanjut")
//     ->with ("waktu",date("H:m:s"));

//     })->name("hai");



//     Route::get("/halo/{nama}", [ContohController::class, "halo"])->name("halo");

//     Route::get('Home','HomeController@index');

Route::get('/indexku', function () {
    return view('indexku');
});
 

Route::put("/update-user/{id}",[UserController::class,"update"])->name("user_update"); //URL From Edit

Route::delete("/hapus-user/{id}",[UserController::class,"hapus"])->name("user_hapus"); //URL From hapus
//URL From Edit

Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

//Route::middleware("auth")->group(function() {
    //     Route::get("/tampil-semua-user", 
    //    [UserController::class, "tampil"])->name("user_all");
//    });




Route::get("Konsumen/buat", [KonsumenController::class, 'buat'])->name("buat_Konsumen");
Route::post("Konsumen/simpan", [KonsumenController::class, 'simpan'])->name("simpan_Konsumen");
Route::get("Konsumen/tampil/{id}", [KonsumenController::class, 'tampil'])->name("tampil_Konsumen");
Route::get("Konsumen/semua", [KonsumenController::class, 'semua'])->name("semua_Konsumen");
Route::get("Konsumen/ubah/{id}", [KonsumenController::class, 'ubah'])->name("ubah_Konsumen");
Route::put("Konsumen/update/{id}", [KonsumenController::class, 'update'])->name("update_Konsumen");
Route::delete("Konsumen/hapus/{id}", [KonsumenController::class, 'hapus'])->name("hapus_Konsumen");


Route::get("Menu/buat", [MenuController::class, 'buat'])->name("buat_Menu");
Route::post("Menu/simpan", [MenuController::class, 'simpan'])->name("simpan_Menu");
Route::get("Menu/tampil/{id}", [MenuController::class, 'tampil'])->name("tampil_Menu");
Route::get("Menu/semua", [MenuController::class, 'semua'])->name("semua_Menu");
Route::get("Menu/ubah/{id}", [MenuController::class, 'ubah'])->name("ubah_Menu");
Route::put("Menu/update/{id}", [MenuController::class, 'update'])->name("update_Menu");
Route::delete("Menu/hapus/{id}", [MenuController::class, 'hapus'])->name("hapus_Menu");

Route::get("Promo/buat", [PromoController::class, 'buat'])->name("buat_Promo");
Route::post("Promo/simpan", [PromoController::class, 'simpan'])->name("simpan_Promo");
Route::get("Promo/tampil/{id}", [PromoController::class, 'tampil'])->name("tampil_Promo");
Route::get("Promo/semua", [PromoController::class, 'semua'])->name("semua_Promo");
Route::get("Promo/ubah/{id}", [PromoController::class, 'ubah'])->name("ubah_Promo");
Route::put("Promo/update/{id}", [PromoController::class, 'update'])->name("update_Promo");
Route::delete("Promo/hapus/{id}", [PromoController::class, 'hapus'])->name("hapus_Promo");

Route::middleware("auth")->group(function(){
    Route::get("/tampil-semua-user",[UserController::class,"tampil"])->name("user_all"); // URLtampilan Semua User
    Route::get("/input-user",[UserController::class,"formInput"])->name("user_input"); //URL form input
    Route::post("/simpan-user",[UserController::class,"simpan"])->name("user_simpan"); //URL Simmpan
    Route::get("/edit-user/{id}",[UserController::class,"formEdit"])->name("user_edit"); //URL From Edit
    Route::get("/tampil-user/{id}",[UserController::class,"show"])->name("user_show"); 
    
    
});

Route::get("Kreator/buat", [KreatorController::class, 'buat'])->name("buat_Kreator");
    Route::post("Kreator/simpan", [KreatorController::class, 'simpan'])->name("simpan_Kreator");
       Route::get("Kreator/tampil/{id}", [KreatorController::class, 'tampil'])->name("tampil_Kreator");
      Route::get("Kreator/semua", [KreatorController::class, 'semua'])->name("semua_Kreator");
      Route::get("Kreator/ubah/{id}", [KreatorController::class, 'ubah'])->name("ubah_Kreator");
      Route::put("Kreator/update/{id}", [KreatorController::class, 'update'])->name("update_Kreator");
      Route::delete("Kreator/hapus/{id}", [KreatorController::class, 'hapus'])->name("hapus_Kreator");