<?php

use App\Http\Controllers\BlankController;
use App\Http\Controllers\BoxedController;
use App\Http\Controllers\CollapsedController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\Error404Controller;
use App\Http\Controllers\Error500Controller;
use App\Http\Controllers\FixedController;
use App\Http\Controllers\GeneralFormController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoicePrintController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LockscreenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\TopNavbarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Index2Controller;


use App\Http\Controllers\ChartjsController;
use App\Http\Controllers\FlotController;
use App\Http\Controllers\InlineController;
use App\Http\Controllers\MorrisController;

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\WidgetController;


use App\Http\Controllers\ButtonController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TimelineController;

use App\Http\Controllers\AdvancedController;
use App\Http\Controllers\DataController;

use App\Http\Controllers\MailboxController;
use App\Http\Controllers\ReadMailController;
use App\Http\Controllers\ComposeController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/index2', [Index2Controller::class, 'index'])->name('index2');



// PAGES
Route::prefix('pages')->name('pages.')->group(function () {
    // PAGES
    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::get('/widgets', [WidgetController::class, 'index'])->name('widgets');

    // CHARTS
    Route::prefix('charts')->name('charts.')->group(function () {
        Route::get('/chartjs', [ChartjsController::class, 'index'])->name('chartjs');
        Route::get('/flot', [FlotController::class, 'index'])->name('flot');
        Route::get('/inline', [InlineController::class, 'index'])->name('inline');
        Route::get('/morris', [MorrisController::class, 'index'])->name('morris');
    });

    // UI 
    Route::prefix('ui')->name('ui.')->group(function () {
        Route::get('/buttons', [ButtonController::class, 'index'])->name('buttons');
        Route::get('/general', [GeneralController::class, 'index'])->name('general');
        Route::get('/icons', [IconController::class, 'index'])->name('icons');
        Route::get('/modals', [ModalController::class, 'index'])->name('modals');
        Route::get('/sliders', [SliderController::class, 'index'])->name('sliders');
        Route::get('/timeline', [TimelineController::class, 'index'])->name('timeline');
    });
    // LAYOUTS
    Route::prefix('layout')->name('layout.')->group(function () {
        Route::get('/top-nav', [TopNavbarController::class, 'index'])->name('top-nav');
        Route::get('/boxed', [BoxedController::class, 'index'])->name('boxed');
        Route::get('/fixed', [FixedController::class, 'index'])->name('fixed');
        Route::get('/collapsed-sidebar', [CollapsedController::class, 'index'])->name('collapsed-sidebar');
    });

    // FORMS
    Route::prefix('forms')->name('forms.')->group(function () {
        Route::get('/general', [GeneralFormController::class, 'index'])->name('general');
        Route::get('/advanced', [AdvancedController::class, 'index'])->name('advanced');
        Route::get('/editors', [EditorController::class, 'index'])->name('editors');
    });

    // TABLES
    Route::prefix('tables')->name('tables.')->group(function () {
        Route::get('/simple', [SimpleController::class, 'index'])->name('simple');
        Route::get('/data', [DataController::class, 'index'])->name('data');
    });

    // MAILBOX
    Route::prefix('mailbox')->name('mailbox.')->group(function () {
        Route::get('/mailbox', [MailboxController::class, 'index'])->name('mailbox');
        Route::get('/compose', [ComposeController::class, 'index'])->name('compose');
        Route::get('/read-mail', [ReadMailController::class, 'index'])->name('read-mail');
    });

    // EXAMPLES
    Route::prefix('examples')->name('examples.')->group(function () {
        Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
        Route::get('/invoice-print', [InvoicePrintController::class, 'index'])->name('invoice-print');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::get('/register', [RegisterController::class, 'index'])->name('register');
        Route::get('/lockscreen', [LockscreenController::class, 'index'])->name('lockscreen');
        Route::get('/404', [Error404Controller::class, 'index'])->name('404');
        Route::get('/500', [Error500Controller::class, 'index'])->name('500');
        Route::get('/blank', [BlankController::class, 'index'])->name('blank');
        Route::get('/pace', [PaceController::class, 'index'])->name('pace');
    });
});





