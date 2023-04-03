<?php

use Illuminate\Support\Facades\Route;
use App\TraitsFolder\BladeDirectives;
use App\Models\MyHouse;
use App\Models\MyHouse1;
use App\Models\MyHouse2;
use Illuminate\Support\Facades\DB;

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
    return view('welcome', ['model1' => 1,
                'model2' => 1,
                'colorModel1' => "#ffffff",
                'colorModel2' => "#ffffff",
                'numberModel1' => 0,
                'numberModel2' => 0,
                'sizeModel1' => 64,
                'sizeModel2' => 64,
                'batch1' => "",
                'batch2' => ""
            ]
        );
});

Route::post('/', function () {
    $houseModel1 = new MyHouse1($_POST['colorModel1'], $_POST['sizeModel1']);
    $houseModel2 = new MyHouse2($_POST['colorModel2'], $_POST['sizeModel2']);
    $batch1 = "";
    $batch2 = "";

    // database insert for request by type
    DB::insert('insert into requestHouses (type, count, size, color) values (?, ?, ?, ?)', [1, $_POST['numberModel1'], $_POST['sizeModel1'], $_POST['colorModel1']]);
    DB::insert('insert into requestHouses (type, count, size, color) values (?, ?, ?, ?)', [2, $_POST['numberModel2'], $_POST['sizeModel2'], $_POST['colorModel2']]);

    for ($i = 1; $i <= $_POST['numberModel1']; $i++) {
        $batch1 .= $houseModel1->generate($_POST['model1']);
    }
    for ($i = 1; $i <= $_POST['numberModel2']; $i++) {
        $batch2 .= $houseModel2->generate($_POST['model2']);
    }
    return view('welcome', ['model1' => $_POST['model1'],
            'model2' => $_POST['model2'],
            'colorModel1' => $_POST['colorModel1'],
            'colorModel2' => $_POST['colorModel2'],
            'numberModel1' => $_POST['numberModel1'],
            'numberModel2' => $_POST['numberModel2'],
            'sizeModel1' => $_POST['sizeModel1'],
            'sizeModel2' => $_POST['sizeModel2'],
            'batch1' => $batch1,
            'batch2' => $batch2
        ]
    );
});

