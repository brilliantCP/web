<?php

use App\Http\Controllers\FakultasController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/fakultas', function() {
//     return view('fakultas');
// });
Route::resource('fakultas', FakultasController::class);


Route::get('/prodi', function() {
    return view('prodi');
});

Route::get('/mahasiswa/{npm}', function($npm) {
    $data = [
        [
            "mk" => "PW2",
            "hari" => "Jumat"
        ],
        [
            "mk" => "PAB1",
            "hari" => "Senin"
        ]

    ];
    return view('mahasiswa.index')->with('npm', $npm)->with('jadwal', $data);
});

Route::get('/dosen', function(){
    $dosen = [
        [
            "kosen" => "000001",
            "nama" => "Ahmad"
        ],
        [
            "kosen" => "000002",
            "nama" => "Kareen"
        ]
    ];
    return view('dosen.index')->with('identitas', $dosen);
});
