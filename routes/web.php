<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Backend\Dashboard;
use App\Livewire\Backend\Setting\Admin\Data as AdminData;
use App\Livewire\Bedroom\Data as BedroomData;
use App\Livewire\Bedroom\Form as BedroomForm;
use App\Livewire\Fintech\Data as FintechData;
use App\Livewire\Fintech\Form as FintechForm;
use App\Livewire\User\Data as UserData;
use App\Livewire\User\Form as UserForm;
use App\Http\Middleware\AdministratorMiddleware;
use App\Http\Middleware\CustomerMiddleware;
use App\Livewire\Auth\Biodata;
use App\Livewire\Auth\Daftar;
use App\Livewire\Auth\Masuk;
use App\Livewire\Frontend\Booking;
use App\Livewire\Frontend\BookingDetail;
use App\Livewire\Frontend\DashboardCustomer;
use App\Livewire\Frontend\Landing\Dashboard as LandingDashboard;
use App\Livewire\Frontend\PageCustomer;
use App\Livewire\Frontend\Setting\Profile\Data as ProfileData;
use App\Livewire\Frontend\TransactionDetail;
use App\Livewire\Transaction\Data;
use App\Livewire\Transaction\Form;
use App\Livewire\Transaction\FormPeriod;

//Authentication
// v1
// Route::get('login', Login::class)->name('login');
// Route::get('register', Register::class)->name('register');
// v2
Route::get('login', Masuk::class)->name('login');
Route::get('register', Daftar::class)->name('register');
Route::get('biodata', Biodata::class)->name('biodata');
//Dashbard
Route::get('/', LandingDashboard::class)->name('front.index');
//Booking Bedroom
Route::get('booking', Booking::class)->name('booking');
Route::get('booking/detail/{bedId}', BookingDetail::class)->name('booking.detail');
//Transaction
Route::get('payment', Form::class)->name('transaction.form');
Route::get('transaction/detail', TransactionDetail::class)->name('transaction.detail');

Route::middleware([CustomerMiddleware::class])->group(function () {
    //Customer Dashboard
    Route::get('dashboard', DashboardCustomer::class)->name('customer.dashboard');
    //Customer Page
    Route::get('kamar-ku', PageCustomer::class)->name('customer.page');
    //Setting Profile
    Route::get('setting-profile', ProfileData::class)->name('customer.profile');
    //Transacion Period
    Route::get('perpanjang', FormPeriod::class)->name('transaction.period');
});

Route::middleware([AdministratorMiddleware::class])->group(function () {
    //Dashboard
    Route::get('admin-dashboard', Dashboard::class)->name('back.index');
    //Setting Profile
    Route::get('setting-profile-admin', AdminData::class)->name('userAdmin.data');
    //User
    Route::get('user', UserData::class)->name('user.data');
    Route::get('user/form/{userId?}', UserForm::class)->name('user.form');
    //Bedroom
    Route::get('bedroom', BedroomData::class)->name('bedroom.data');
    Route::get('bedroom/form/{bedId?}', BedroomForm::class)->name('bedroom.form');
    //Fintech / Rekening
    Route::get('fintech', FintechData::class)->name('fintech.data');
    Route::get('fintech/form/{fintechId?}', FintechForm::class)->name('fintech.form');
    //Transaction
    Route::get('transaction', Data::class)->name('transaction.data');
});
