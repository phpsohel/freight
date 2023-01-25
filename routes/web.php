<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContainerController;

// All Route Cache Clear
// =========================
Route::get('/clear', function() {
    Artisan::call('cache:clear');
        dd("Cache Clear All");
});

Route::get('/', function () {
    return redirect('/search');
});
Route::controller(ContainerController::class)->group(function() {
    Route::get('/search', 'search')->name('search');
    Route::get('/search/get-bl-number', 'getBLNumber')->name('admin.getblnumber');
});
//Admin
Route::middleware(['auth'])->group(function(){
    Route::controller(AdminController::class)->group(function()
        {
        Route::get('/dashboard', 'index')->name('index');
        Route::get('profile', 'profile')->name('admin.profile');
        Route::get('password-change', 'PasswordChange')->name('admin.password-change');
        Route::post('store/password-change', 'StorePasswordChange')->name('admin.store.password-change');
        Route::get('logout', 'Logout')->name('admin.logout');
        //Customer
        // Route::get('admin/all-customer', 'AllCustomer')->name('admin.all-customer');
        // Route::get('admin/add-customer', 'Add_customer')->name('admin.add-customer');
        // Route::post('admin/store/add-customer', 'Store')->name('admin.store.add-customer');
        // Route::get('admin/edit-customer/{id}', 'Edit')->name('admin.edit-customer');
        // Route::post('admin/update-customer/{id}', 'Update')->name('admin.update-customer');
        // Route::get('admin/status-customer/{id}', 'Status')->name('admin.status-customer');
        // Route::get('admin/delete-customer/{id}', 'Delete')->name('admin.delete-customer');
        // Route::get('admin/view-customer/{id}', 'View_Customer')->name('admin.view-customer');
        // Route::get('admin/view-customer/pdf-generate/{id}', 'Generate')->name('generate-pdf.generate');

        // Add Domain & Hosting
        // Route::get('admin/all-domain/', 'All_domain')->name('admin.all-domain');
        // Route::get('admin/add-domain', 'Add_domain')->name('admin.add-domain');
        // Route::post('admin/add-domain', 'StoreAdmin')->name('admin.store.add-domain');
        // Route::get('admin/edit-domain/{id}', 'Edit_Domain')->name('admin.edit-domain');
        // Route::post('admin/update-domain/{id}', 'Update_Domain')->name('admin.update-domain');
        // Route::get('admin/delete-domain/{id}', 'Delete_Domain')->name('admin.delete-domain');
        // Route::get('admin/view-domain/{id}', 'View_Domain')->name('admin.view-domain');
        // Route::get('admin/view-domain/pdf/{id}', 'DomainPdf')->name('domain.pdf');

        // Expire Domain & Hosting
        //  Route::get('admin/all-expire', 'Expire')->name('admin.all-expire');
        //  Route::post('admin/all-expire/search', 'ExpireSearch')->name('admin.all-expire.search');
        }
    );

    //Container
    Route::resource('containers', ContainerController::class);
    Route::get('containers/details/{id}', [ContainerController::class, 'show'])->name('containers.details');
    Route::get('containers/delete/{id}', [ContainerController::class, 'destroy'])->name('containers.delete');
});


require __DIR__.'/auth.php';
