
<?php

use Illuminate\Support\Facades\Log;
use Unsplash\HttpClient;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Artisan;

Route::get('/init-db', function () {
    Artisan::call('migrate', ['--force' => true]);
    return "Database initialized!";
});


// Route for landing page
Route::get('/', function () {
    $refferal = [
        [
            "reffar_code" => "MALANGDEV",
            "reffar_name" => "referal kota malang",
            "discount" => "10",
            "reffar_msg" => "Selamat Anda mendapatkan diskon 10% dengan menggunakan kode referal MALANGDEV",
        ],
        [
            "reffar_code" => "SURABAYADEV",
            "reffar_name" => "referal kota surabaya",
            "discount" => "10",
            "reffar_msg" => "Selamat Anda mendapatkan diskon 10% dengan menggunakan kode referal SURABAYADEV",
        ],
        [
            "reffar_code" => "JAKARTADEV",
            "reffar_name" => "referal kota jakarta",
            "discount" => "10",
            "reffar_msg" => "Selamat Anda mendapatkan diskon 10% dengan menggunakan kode referal JAKARTADEV",
        ],
        [
            "reffar_code" => "BANDUNGDEV",
            "reffar_name" => "referal kota bandung",
            "discount" => "10",
            "reffar_msg" => "Selamat Anda mendapatkan diskon 10% dengan menggunakan kode referal BANDUNGDEV",
        ],
        [
            "reffar_code" => "YOGYAKARTADEV",
            "reffar_name" => "referal kota yogyakarta",
            "discount" => "10",
            "reffar_msg" => "Selamat Anda mendapatkan diskon 10% dengan menggunakan kode referal YOGYAKARTADEV",
        ],
    ];





    return view('landingpage', compact('refferal'));
})->name('landingpage');

Route::get('/profile', function () {
    return redirect()->to('https://drive.google.com/file/d/1h06PV6KLaubFQoU7Q5JIem5FT4NKG9jX/view?usp=sharing');
})->name('profile');
Route::get('/survei', function () {
    return redirect()->to('https://forms.gle/VHecYysaYbxoWS5X9');
})->name('survei');

Route::prefix('/portofolio')->group(function () {
    Route::get('/', function () {
        $projects = [
            [
                "id" => 1,
                "title" => "Kopi tah",
                "description" => "This is project 1",
                "image_url" => "https://via.placeholder.com/300x300",
                "project_link" => "/portofolio/kopitai",
            ],
            [
                "id" => 2,
                "title" => "POS",
                "description" => "This is project 2",
                "image_url" => "https://via.placeholder.com/300x300",
                "project_link" => "/portofolio/pos",
            ],
            [
                "id" => 3,
                "title" => "event",
                "description" => "This is project 3",
                "project_link" => "/portofolio/event",
                "image_url" => "https://via.placeholder.com/300x300"
            ],
            [
                "id" => 4,
                "title" => "exam",
                "description" => "This is project 4",
                "project_link" => "/portofolio/exam",
                "image_url" => "https://via.placeholder.com/300x300"
            ],
            [
                "id" => 5,
                "title" => "parking",
                "description" => "This is project 5",
                "project_link" => "/portofolio/parking",
                "image_url" => "https://via.placeholder.com/300x300"
            ],
            [
                "id" => 6,
                "title" => "panca",
                "description" => "This is project 6",
                "project_link" => "https://deteksipanca.com",
                "image_url" => "https://via.placeholder.com/300x300"
            ]
        ];
        return view('portofolio.portoDashboard', compact('projects'));
    })->name('portofolio.dashboard');
    Route::get('/kopitai', function () {


        return view('portofolio.kopitai');
    })->name('portofolio.kopitai');
    Route::get('/pos', function () {
        return view('portofolio.posSystem');
    })->name('portofolio.pos');
    Route::get('/event', function () {
        $imgCount = 9;
        $apiUrl = 'https://randomuser.me/api/?results=' . $imgCount;
        $response = Http::get($apiUrl);
        $profilImg = array_map(function ($user) {
            return $user['picture']['large'];
        }, json_decode($response->getBody(), true)['results']);


        Log::info($profilImg);
        return view('portofolio.event', compact('profilImg'));
    })->name('portofolio.event');
    Route::get('/exam', function () {
        return view('portofolio.exam');
    })->name('portofolio.exam');
    Route::get('/parking', function () {
        return view('portofolio.parking');
    })->name('portofolio.parking');
});

// Route Call to Action
Route::get('/AjukanProjekIT', function () {
    return redirect('/#contact');
})->name('AjukanProjekIT');
Route::get('/AjukanProjek', function () {
    return redirect('/#contact');
})->name('AjukanProjek');
Route::get('/ajukanProjekIT', function () {
    return redirect('/#contact');
})->name('ajukanProjekIT');
Route::get('/ajukanProjek', function () {
    return redirect('/#contact');
})->name('ajukanProjek');
Route::get('/ajukanprojekit', function () {
    return redirect('/#contact');
})->name('ajukanprojekit');
Route::get('/ajukanprojek', function () {
    return redirect('/#contact');
})->name('ajukanprojek');


Route::prefix('/marketeers')->group(function () {
    Route::get('/', function () {
        return view('underConstruction');
    })->name('marketeers');

    Route::get('/price-list', function () {
        return view('underConstruction');
    })->name('marketeers.priceList');

    Route::get('/price-list/ecommerce', function () {
        return redirect()->away('https://drive.google.com/file/d/1e9o_VkX46lpaToEp8C1V3FzO7Nk3xmxs/view?usp=sharing');
    })->name('marketeers.priceList');
});




// // Route for dashboard
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


// 404 not found
Route::fallback(function () {
    return view('404');
});
