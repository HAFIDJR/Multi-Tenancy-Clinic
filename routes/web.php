<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Models\Clinic;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/debug', function () {
    $user = auth()->user();
    
    if (!$user) {
        return 'Belum login';
    }
    
    return [
        'user' => $user->name,
        'clinics' => $user->clinics->toArray(),
    ];
});



Route::get('/test-clinic/{clinic}', function (Clinic $clinic) {
    return $clinic->toJson();
});

Route::get('/test-tenant', function () {
    $user = \App\Models\User::first();
    $panel = \Filament\Facades\Filament::getPanel('admin');
    
    dump('Panel ID:', $panel->getId());
    dump('Tenant Model:', $panel->getTenantModel());
    dump('Has Tenancy:', $panel->hasTenancy());
    dump('User Tenants:', $user->getTenants($panel)->toArray());
    
    return 'OK';
});


// Route::get('/admin', function () {
//     $user = Auth::user();
//     if ($user && $user->clinics->isNotEmpty()) {
//         // Redirect ke klinik pertama milik user
//         return redirect('/admin/' . $user->clinics->first()->id);
//     }
//     // Jika belum login atau tidak punya klinik, arahkan ke login klinik default (misal ID 1)
//     return redirect('/admin/1/login');
// })->name('login'); // Beri nama login agar middleware auth tau arahnya