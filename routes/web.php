<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Backend\Dashboard;
use App\Livewire\Backend\Setting\Admin\Data as AdminData;
use App\Livewire\Backend\Setting\Admin\Form as AdminForm;
use App\Livewire\Backend\Setting\Admin\Password;
use App\Livewire\Bedroom\Data;
use App\Livewire\Bedroom\Form;
use App\Livewire\Fintech\Data as FintechData;
use App\Livewire\Fintech\Form as FintechForm;
use App\Livewire\Frontend\Dashboard as FrontendDashboard;
use App\Livewire\User\Data as UserData;
use App\Livewire\User\Form as UserForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('index', function (){
    return view('index');
})->name('index');

// #171268
//Dashboard
Route::get('admin-dashboard', Dashboard::class)->name('back.index');
Route::get('dashboard', FrontendDashboard::class)->name('front.index');
//Authentication
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');
//User
Route::get('user', UserData::class)->name('user.data');
Route::get('user/form/{userId?}', UserForm::class)->name('user.form');
//Admin
Route::get('settingAdmin/data', AdminData::class)->name('userAdmin.data');
Route::get('settingAdmin/form', AdminForm::class)->name('userAdmin.form');
Route::get('settingAdmin/password/{passwordId?}', Password::class)->name('userAdmin.password');
//Bedroom
Route::get('bedroom', Data::class)->name('bedroom.data');
Route::get('bedroom/form/{bedId?}', Form::class)->name('bedroom.form');
//Fintech / Rekening
Route::get('fintech', FintechData::class)->name('fintech.data');
Route::get('fintech/form/{fintechId?}', FintechForm::class)->name('fintech.form');
