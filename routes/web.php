<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Backend\Dashboard;
use App\Livewire\Backend\Setting\Admin\Data as AdminData;
use App\Livewire\Bedroom\Data;
use App\Livewire\Bedroom\Form;
use App\Livewire\Fintech\Data as FintechData;
use App\Livewire\Fintech\Form as FintechForm;
use App\Livewire\User\Data as UserData;
use App\Livewire\User\Form as UserForm;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdministratorMiddleware;
use App\Livewire\Booking;
use App\Livewire\Frontend\Booking as FrontendBooking;
use App\Livewire\Frontend\Landing\Dashboard as LandingDashboard;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('index', function () {
    return view('index');
})->name('index');

//Authentication
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');
//Dashbard
Route::get('/', LandingDashboard::class)->name('front.index');
//Booking Bedroom
Route::get('booking', FrontendBooking::class)->name('booking');

Route::middleware([AdministratorMiddleware::class])->group(function () {
    //Dashboard
    Route::get('admin-dashboard', Dashboard::class)->name('back.index');
    //User
    Route::get('user', UserData::class)->name('user.data');
    Route::get('user/form/{userId?}', UserForm::class)->name('user.form');
    //Setting Profile Admin
    Route::get('profileAdmin/data', AdminData::class)->name('userAdmin.data');
    //Bedroom
    Route::get('bedroom', Data::class)->name('bedroom.data');
    Route::get('bedroom/form/{bedId?}', Form::class)->name('bedroom.form');
    //Fintech / Rekening
    Route::get('fintech', FintechData::class)->name('fintech.data');
    Route::get('fintech/form/{fintechId?}', FintechForm::class)->name('fintech.form');
});
