<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admintheme;
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


Route::get('index', [admintheme::class, 'showindex'])->name('index');
Route::get('calendar', [admintheme::class, 'showcalendar'])->name('calendar');
Route::get('chart-c3', [admintheme::class, 'showchartc3'])->name('chart-c3');
Route::get('chart-chartist', [admintheme::class, 'showchartchartist'])->name('chart-chartist');
Route::get('chart-chartjs', [admintheme::class, 'showchartchartjs'])->name('chart-chartjs');
Route::get('chart-flot', [admintheme::class, 'showchartflot'])->name('chart-flot');
Route::get('chart-knob', [admintheme::class, 'showchartknob'])->name('chart-knob');
Route::get('chart-morris', [admintheme::class, 'showchartmorris'])->name('chart-morris');
Route::get('chart-peity', [admintheme::class, 'showchartpeity'])->name('chart-peity');
Route::get('chart-sparkline', [admintheme::class, 'showchartsparkline'])->name('chart-sparkline');
Route::get('components-grid', [admintheme::class, 'showcomponentsgrid'])->name('components-grid');
Route::get('components-range-sliders', [admintheme::class, 'showcomponentsrangesliders'])->name('components-range-sliders');
Route::get('components-ratings', [admintheme::class, 'showcomponentsratings'])->name('components-ratings');
Route::get('components-sweet-alert', [admintheme::class, 'showcomponentssweetalert'])->name('components-sweet-alert');
Route::get('components-tour', [admintheme::class, 'showcomponentstour'])->name('components-tour');
Route::get('components-treeview', [admintheme::class, 'showcomponentstreeview'])->name('components-treeview');
Route::get('form-advanced', [admintheme::class, 'showformadvanced'])->name('form-advanced');
Route::get('form-elements', [admintheme::class, 'showformelements'])->name('form-elements');
Route::get('form-mask', [admintheme::class, 'showformmask'])->name('form-mask');
Route::get('form-pickers', [admintheme::class, 'showformpickers'])->name('form-pickers');
Route::get('form-uploads', [admintheme::class, 'showformuploads'])->name('form-uploads');
Route::get('form-validation', [admintheme::class, 'showformvalidation'])->name('form-validation');
Route::get('form-wizard', [admintheme::class, 'showformwizard'])->name('form-wizard');
Route::get('form-xeditable', [admintheme::class, 'showformxeditable'])->name('form-xeditable');
Route::get('icons-fontawesome', [admintheme::class, 'showiconsfontawesome'])->name('icons-fontawesome');
Route::get('icons-ionicons', [admintheme::class, 'showiconsionicons'])->name('icons-ionicons');
Route::get('icons-materialdesign', [admintheme::class, 'showiconsmaterialdesign'])->name('icons-materialdesign');
Route::get('icons-pe7', [admintheme::class, 'showiconspe7'])->name('icons-pe7');
Route::get('icons-simple-line', [admintheme::class, 'showiconssimpleline'])->name('icons-simple-line');
Route::get('icons-themify', [admintheme::class, 'showiconsthemify'])->name('icons-themify');
Route::get('icons-typicons', [admintheme::class, 'showiconstypicons'])->name('icons-typicons');
Route::get('icons-weather', [admintheme::class, 'showiconsweather'])->name('icons-weather');
Route::get('pages-404', [admintheme::class, 'showpages404'])->name('pages-404');
Route::get('pages-500', [admintheme::class, 'showpages500'])->name('pages-500');
Route::get('pages-comingsoon', [admintheme::class, 'showpagescomingsoon'])->name('pages-comingsoon');
Route::get('pages-gallery', [admintheme::class, 'showpagesgallery'])->name('pages-gallery');
Route::get('pages-invoice', [admintheme::class, 'showpagesinvoice'])->name('pages-invoice');
Route::get('pages-lock-screen', [admintheme::class, 'showpageslockscreen'])->name('pages-lock-screen');
Route::get('pages-login', [admintheme::class, 'showpageslogin'])->name('pages-login');
Route::get('pages-maintenance', [admintheme::class, 'showpagesmaintenance'])->name('pages-maintenance');
Route::get('pages-pricing', [admintheme::class, 'showpagespricing'])->name('pages-pricing');
Route::get('pages-recoverpw', [admintheme::class, 'showpagesrecoverpw'])->name('pages-recoverpw');
Route::get('pages-register', [admintheme::class, 'showpagesregister'])->name('pages-register');
Route::get('pages-starter', [admintheme::class, 'pagesstarter'])->name('pages-starter');
Route::get('pages-timeline', [admintheme::class, 'showpagestimeline'])->name('pages-timeline');
Route::get('tables-basic', [admintheme::class, 'showtablesbasic'])->name('tables-basic');
Route::get('tables-datatable', [admintheme::class, 'showtablesdatatable'])->name('tables-datatable');
Route::get('tables-responsive', [admintheme::class, 'showtablesresponsive'])->name('tables-responsive');
Route::get('tables-tablesaw', [admintheme::class, 'showtablestablesaw'])->name('tables-tablesaw');
Route::get('ui-alerts', [admintheme::class, 'showuialerts'])->name('ui-alerts');
Route::get('ui-bootstrap', [admintheme::class, 'showuibootstrap'])->name('ui-bootstrap');
Route::get('ui-buttons', [admintheme::class, 'showuibuttons'])->name('ui-buttons');
Route::get('ui-cards', [admintheme::class, 'showuicards'])->name('ui-cards');
Route::get('ui-carousel', [admintheme::class, 'showuicarousel'])->name('ui-carousel');
Route::get('ui-checkbox-radio', [admintheme::class, 'showuicheckboxradio'])->name('ui-checkbox-radio');
Route::get('ui-dropdowns', [admintheme::class, 'showuidropdowns'])->name('ui-dropdowns');
Route::get('ui-modals', [admintheme::class, 'showuimodals'])->name('ui-modals');
Route::get('ui-navs', [admintheme::class, 'showuinavs'])->name('ui-navs');
Route::get('ui-notification', [admintheme::class, 'showuinotification'])->name('ui-notification');
Route::get('ui-progress', [admintheme::class, 'showuiprogress'])->name('ui-progress');
Route::get('ui-typography', [admintheme::class, 'showuitypography'])->name('ui-typography');
Route::get('widgets-charts', [admintheme::class, 'showwidgetscharts'])->name('widgets-charts');
Route::get('widgets-tiles', [admintheme::class, 'showwidgetstiles'])->name('widgets-tiles');






Route::get('/', function () {
    return view('welcome');
});

