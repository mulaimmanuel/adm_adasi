<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HandlingController;
use App\http\Controllers\DeptManController;
use App\http\Controllers\PDFController;
use App\http\Controllers\ExcelController;
use App\Http\Controllers\MesinController;
use App\Http\Controllers\FormFPPController;
use App\Http\Controllers\PreventiveController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DetailPreventiveController;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
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

Route::get('full-calender', [EventController::class, 'index'])->name('maintenance.blokpreventive');
Route::post('full-calender-AJAX', [EventController::class, 'ajax']);

Route::resource('mesins', MesinController::class);
Route::resource('formperbaikans', FormFPPController::class);
Route::resource('receivedfpps', FormFPPController::class);
Route::resource('approvedfpps', FormFPPController::class);
Route::resource('tindaklanjuts', FormFPPController::class);
Route::resource('preventives', PreventiveController::class);
Route::resource('detailpreventive', DetailPreventiveController::class);

//Preventive
Route::get('dashpreventive', [PreventiveController::class, 'maintenanceDashPreventive'])
    ->name('maintenance.dashpreventive');
Route::get('deptmtcepreventive', [PreventiveController::class, 'deptmtceDashPreventive'])
    ->name('deptmtce.dashpreventive');

//Production
Route::get('dashboardproduction', [FormFPPController::class, 'DashboardProduction'])
    ->name('fpps.index');
Route::get('formproduction', [FormFPPController::class, 'FormProduction'])
    ->name('fpps.create');

Route::get('lihatform/{formperbaikan}', [FormFPPController::class, 'LihatFPP'])
    ->name('fpps.show');
Route::get('closedform/{formperbaikan}', [FormFPPController::class, 'ClosedFormProduction'])
    ->name('fpps.closed');

//Maintenance
Route::get('dashboardmaintenance', [FormFPPController::class, 'DashboardMaintenance'])
    ->name('maintenance.index');
Route::get('lihatmaintenance/{formperbaikan}', [FormFPPController::class, 'LihatMaintenance'])
    ->name('maintenance.lihat');
Route::get('editmaintenance/{formperbaikan}', [FormFPPController::class, 'EditMaintenance'])
    ->name('maintenance.edit');


Route::get('editpreventive/{mesin}', [PreventiveController::class, 'EditMaintenancePreventive'])
    ->name('maintenance.editpreventive');
Route::get('mesins/{mesin}/edit-issue', [MesinController::class, 'editIssue'])
    ->name('mesins.issue');
Route::get('mesins/{mesin}/edit-perbaikan', [MesinController::class, 'editPerbaikan'])
    ->name('mesins.perbaikan');
Route::put('mesins/{mesin}/update-preventive', [MesinController::class, 'updatePreventive'])
    ->name('mesins.updatePreventive');


Route::put('mesins/{mesin}/update-issue', [DetailPreventiveController::class, 'updateIssue'])
    ->name('detailpreventives.updateIssue');
Route::put('mesins/{mesin}/update-perbaikan', [DetailPreventiveController::class, 'updatePerbaikan'])
    ->name('detailpreventives.updatePerbaikan');

//Dept Maintenance
Route::get('dashboarddeptmtce', [FormFPPController::class, 'DashboardDeptMTCE'])
    ->name('deptmtce.index');
Route::get('lihatdeptmtce/{formperbaikan}', [FormFPPController::class, 'LihatDeptMTCE'])
    ->name('deptmtce.show');
Route::get('editdeptmtcepreventive/{preventive}', [PreventiveController::class, 'EditDeptMTCEPreventive'])
    ->name('deptmtce.editpreventive');
Route::get('mesins/{mesin}/lihat-issue', [MesinController::class, 'lihatIssue'])
    ->name('mesins.lihatissue');
Route::get('mesins/{mesin}/lihat-perbaikan', [MesinController::class, 'lihatPerbaikan'])
    ->name('mesins.lihatperbaikan');


//Sales
Route::get('dashboardfppsales', [FormFPPController::class, 'DashboardFPPSales'])
    ->name('sales.index');
Route::get('lihatfppsales/{formperbaikan}', [FormFPPController::class, 'LihatFPPSales'])
    ->name('sales.lihat');

//Download Excel
Route::get('download-excel/{tindaklanjut}', [FormFPPController::class, 'downloadAttachment'])->name('download.attachment');


//sales
Route::get('handling', [HandlingController::class, 'index'])->name('index');
// Menambahkan rute untuk menampilkan halaman create
Route::get('create', [HandlingController::class, 'create'])->name('create');
Route::post('store', [HandlingController::class, 'store'])->name('store');
Route::get('/edit/{id}', [HandlingController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [HandlingController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [HandlingController::class, 'delete'])->name('delete');
Route::patch('/changeStatus/{id}', [HandlingController::class, 'changeStatus'])->name('changeStatus');



//deptMan
Route::get('deptMan', [DeptManController::class, 'submission'])->name('submission');
Route::get('/showConfirm/{id}', [DeptManController::class, 'showConfirm'])->name('showConfirm');
Route::put('/updateConfirm/{id}', [DeptManController::class, 'updateConfirm'])->name('updateConfirm');
Route::get('/showFollowUp/{id}', [DeptManController::class, 'showFollowUp'])->name('showFollowUp');
Route::get('/showHistoryProgres/{id}', [DeptManController::class, 'showHistoryProgres'])->name('showHistoryProgres');
Route::put('/updateFollowUp/{id}', [DeptManController::class, 'updateFollowUp'])->name('updateFollowUp');
Route::get('scheduleVisit', [DeptManController::class, 'scheduleVisit'])->name('scheduleVisit');
Route::get('showHistoryCLaimComplain', [DeptManController::class, 'showHistoryCLaimComplain'])->name('showHistoryCLaimComplain');
Route::get('/export-excel', [ExcelController::class, 'exportExcel'])->name('export.excel');
